<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Roles;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use HTMLPurifier;


/**
 * @resource Roles
 *
 * TBD
 */
class RolesController extends Controller
{
    /**
     * Included traits
     * @hideFromAPIDocumentation
     */
    use HelperTrait;


    /**
     * Index
     *
     * Retrieve Roles
     *
     * @return json             Paginated Roles
     */
    public function index()
    {
        return $this->helper_formatJsonResponse(
            Roles::paginate(25)
        );
    }


    /**
     * Create new role.
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
     * Retrieve role.
     *
     * @var ID      $id         Role id.
     *
     * @return json             Role
     */
    public function show($id)
    {
        return $this->helper_formatJsonResponse(
            Roles::find($id)
        );

    }


    /**
     * Update role.
     *
     * @var Request $request    Laravel request object.
     * @var ID      $id         Role id.
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
