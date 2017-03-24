<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Types;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use HTMLPurifier;


/**
 * @resource Types
 *
 * TBD
 */
class TypesController extends Controller
{
    /**
     * Included traits
     * @hideFromAPIDocumentation
     */
    use HelperTrait;


    /**
     * Index
     *
     * Retrieve Available Request Types
     *
     * @return json             Paginated Available Request Types
     */
    public function index()
    {
        return $this->helper_formatJsonResponse(
            Types::all()
        );
    }


    /**
     * Create new Type.
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
     * Retrieve Type.
     *
     * @var ID      $id         Type id.
     *
     * @return json             Type
     */
    public function show($id)
    {
        return $this->helper_formatJsonResponse(
            Types::find($id)
        );
    }


    /**
     * Update Type.
     *
     * @var Request $request    Laravel request object.
     * @var ID      $id         Type id.
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
     * Delete Type.
     *
     * @var ID      $id         Type id.
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
