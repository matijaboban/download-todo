<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Permissions;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use HTMLPurifier;


/**
 * @resource Permissions
 *
 * TBD
 */
class PermissionsController extends Controller
{
    /**
     * Included traits
     * @hideFromAPIDocumentation
     */
    use HelperTrait;


    /**
     * Index
     *
     * Retrieve Permisions
     *
     * @return json             Paginated Permisions
     */
    public function index()
    {
        return $this->helper_formatJsonResponse(
            Permissions::paginate(25)
        );
    }


    /**
     * Create new permission.
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
     * Retrieve permission.
     *
     * @var ID      $id         Permission id.
     *
     * @return json             Permission
     */
    public function show($id)
    {
        return $this->helper_formatJsonResponse(
            Permissions::find($id)
        );

    }


    /**
     * Update permission.
     *
     * @var Request $request    Laravel request object.
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
     * Delete permission.
     *
     * @var Request $request    Laravel request object.
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
