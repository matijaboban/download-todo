<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Requests as userRequests;
use App\Models\RequestsView as userRequestsView;
use App\Models\RequestStatuses;
use App\Models\RequestInputs;
use App\Models\Types;
use App\Models\Statuses;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use HTMLPurifier;


/**
 * @resource Request status
 *
 * TBD
 */
class RequestStatusesController extends Controller
{
    /**
     * Included traits
     * @hideFromAPIDocumentation
     */
    use HelperTrait;


    /**
     * Index
     *
     * Retrieve Requests status
     *
     */
    public function index()
    {
        return response()->json(
            'Resource currently not implemented.', 501
        );
    }


    /**
     * Create new request status.
     *
     * @var Request $request    Laravel request object.
     *
     * @todo Implement
     *
     */
    public function store(Request $request)
    {
        return response()->json(
            'Resource currently not implemented.', 501
        );
    }


    /**
     * Retrieve user request status.
     *
     * @var ID      $id         User Request id.
     *
     * @return json             User Requests status
     */
    public function show(int $id)
    {
        return $this->helper_formatJsonResponse(
            RequestStatuses::getStatus($id)
        );

    }


    /**
     * Update user request status.
     *
     * @var Request $request    Laravel request object.
     * @var ID      $id         User request id.
     *
     * @return json             User Requests status
     *
     * @todo Move validation to helper class or trait
     *
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status_id' => 'bail|required|numeric|min:'.Statuses::min('id').'|max:'.Statuses::max('id'),
            'note'      => 'sometimes|max:500'
        ]);

        $status = RequestStatuses::handleStatuses($request->all(), $id);

        return response()->json([
            'status_id'     => $status->status_id,
            'note'          => $status->note,
            'updated_at'    => $status->updated_at,
        ]);
    }


    /**
     * Delete user request status.
     *
     * @var ID      $id         User request id.
     *
     * @todo Implement
     *
     */
    public function destroy(int $id)
    {
        return response()->json(
            'Resource currently not implemented.', 501
        );
    }


    /**
     * Retrieve user request status log.
     *
     * @var ID      $id         User request id.
     *
     * @return json             User Requests status log
     *
     */
    public function getStatusLog(int $id)
    {
        return $this->helper_formatJsonResponse(
            userRequestsView::find($id),
            'getStatusLogAttribute'
        );
    }

}
