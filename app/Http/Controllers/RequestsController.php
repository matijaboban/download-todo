<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Requests as UserRequests;
use App\Models\RequestsView as UserRequestsView;
use App\Models\RequestStatuses;
use App\Models\RequestInputs;
use App\Models\Statuses;
use App\Models\Types;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Input;
use HTMLPurifier;
use Validator;


/**
 * @resource User Requests
 *
 * TBD
 */
class RequestsController extends Controller
{
    /**
     * Included traits
     * @hideFromAPIDocumentation
     */
    use HelperTrait;


    /**
     * Index
     *
     * Retrieve Users Requests
     *
     * @var Request $request    Laravel request object.
     *
     * @return json             Paginated Requests
     */
    public function index(Request $request)
    {
        return $this->helper_formatJsonResponse(
            (UserRequestsView::where((new UserRequestsView)->buildFilter($request->input()))
                ->paginate(25))
            ->appends($request->input()
            )
        );
    }


    /**
     * Create new users request.
     *
     * @var Request $request    Laravel request object.
     *
     * @return json             Stored Requests
     */
    public function store(Request $request)
    {
        return response()->json(
            $this->processUserRequest($request)
        );
    }


    /**
     * Retrieve user request.
     *
     * @var ID      $id         User request id.
     *
     * @return json             User Requests
     */
    public function show(int $id)
    {
        $request = UserRequestsView::find($id);

        return $this->helper_formatJsonResponse(
            $request,
            'getRequest'
        );

    }


    /**
     * Update users request.
     *
     * @var Request $request    Laravel request object.
     * @var ID      $id         User request id.
     *
     * @return json             Stored Requests
     */
    public function update(Request $request, int $id)
    {
        return response()->json(
            $this->processUserRequest($request, $id)
        );
    }


    /**
     * Delete users request.
     *
     * @var ID      $id         User request id.
     *
     * @return json             Stored Requests
     */
    public function destroy($id)
    {
        return response()->json(
            UserRequests::findOrFail($id)
            ->delete()
        );
    }


    /**
     * Process Users Request.
     *
     * @var Request $request    Laravel request object.
     *
     * @return json             Paginated Requests
     *
     * @todo Move to Requests model
     *
     */
    public function processUserRequest(Request $request, int $id = null)
    {
        $types = new Types;

        // Initial validation for request type id. If this value is missing
        // or malformed, the request is rejected. The request_type is also validated
        // for min and max values against dB entries for Types.
        $this->validate($request, [
            'request_type' => 'required|numeric|min:'.$types::min('id').'|max:'.$types::max('id'),
        ]);

        // Run HTML purify on field input values
        $purifier = new HTMLPurifier();
        foreach ( json_decode(($types::findOrFail($request->input('request_type')))->fields) as $field ) {
            if ($request->has($field->name)) {

                $input = $request->all();
                $input[$field->name] = $purifier->purify($input[$field->name]);

                $request->replace($input);
            }
        }

        // Generate and run validation rules
        $validationRules = $types->validationRules($request->input('request_type'));
        $this->validate($request, $validationRules['rules'], $validationRules['messages']);

        // Create or update base user request information
        $UserRequests = UserRequests::updateOrCreate(
                    ['id' => $id],
                    ['user_id'      => $request->user_id, 'request_type'  => $request->request_type]
                );

        // Handle request status
        $this->processStatus($request, $UserRequests->id);

        // Handle request inputs
        RequestInputs::handleInputs(
            $request->all(),
            $UserRequests->id
        );

        return UserRequestsView::findOrFail($UserRequests->id)->getRequest();
    }

    /**
     * Process user request status
     *
     * Create Users Request.
     *
     * @var Request $request    Laravel request object.
     * @var ID      $id         User request id.
     *
     * @todo Move to RequestStatuses model
     *
     */
    private function processStatus(Request $request, int $id)
    {

        if ( !isset($request->status_id) && $request->method() == 'PUT' ) {
            return;
        }

        $this->validate($request, [
            'status_id' => 'bail|required|numeric|min:'.Statuses::min('id').'|max:'.Statuses::max('id'),
            'note'      => 'sometimes|max:500'
        ]);

        $statusData = [
            'status_id' => Statuses::where('name', 'requested')->first()->id,
            'note'      => 'Initial Request',
        ];

        if ( isset($request->status_id) ) {
            $statusData['status_id'] = $request->status_id;
        }

        if ( isset($request->status_note) ) {
            $statusData['note'] = $request->status_note;
        } elseif (!isset($request->status_note) && $request->method() == 'PUT') {
            $statusData['note'] = '';
        }

        RequestStatuses::handleStatuses(
            $statusData,
            $id
        );
    }
}
