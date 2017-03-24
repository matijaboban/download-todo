<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Statuses;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use HTMLPurifier;


/**
 * @resource Statuses
 *
 * TBD
 */
class StatusesController extends Controller
{
    /**
     * Included traits
     * @hideFromAPIDocumentation
     */
    use HelperTrait;


    /**
     * Index
     *
     * Retrieve Available Request Statuses
     *
     * @return json             Paginated Available Request Statuses
     */
    public function index()
    {
        return $this->helper_formatJsonResponse(
            Statuses::all()
        );
    }


    /**
     * Create new status.
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
     * Retrieve status.
     *
     * @var ID      $id         Status id.
     *
     * @return json             Status
     */
    public function show($id)
    {
        return $this->helper_formatJsonResponse(
            Statuses::find($id)
        );

    }


    /**
     * Update status.
     *
     * @var Request $request    Laravel request object.
     * @var ID      $id         Status id.
     *
     * @todo Implement
     *
     */
    public function update(Request $request, $id)
    {
        return response()->json(
            'Resource currently not implemented.', 501
        );
    }


    /**
     * Delete status.
     *
     * @var ID      $id         Role id.
     *
     * @todo Implement
     *
     */
    public function destroy($id)
    {
        return response()->json(
            'Resource currently not implemented.', 501
        );
    }
}
