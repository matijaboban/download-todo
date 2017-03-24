<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use HTMLPurifier;


/**
 * @resource Users
 *
 * TBD
 */
class UsersController extends Controller
{
    /**
     * Included traits
     * @hideFromAPIDocumentation
     */
    use HelperTrait;


    /**
     * Index
     *
     * Retrieve Users
     *
     * @return json             Paginated Users
     */
    public function index()
    {
        return $this->helper_formatJsonResponse(
            User::paginate(25)
        );
    }


    /**
     * Create new User.
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
     * Retrieve User.
     *
     * @var ID      $id         User id.
     *
     * @return json             User
     */
    public function show($id)
    {
        return $this->helper_formatJsonResponse(
            User::find($id)
        );
    }


    /**
     * Update User.
     *
     * @var Request $request    Laravel request object.
     * @var ID      $id         User id.
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
     * Delete User.
     *
     * @var ID      $id         User id.
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
