<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Aliases
 *
 * APIs for managing aliases
 */
class AliasController extends CrudController
{
    public function __construct(\Models\Alias $alias)
    {
        parent::__construct($alias);
    }

    /**
     * Browse
     * 
     * Retrieve a list of all available aliases
     *
     * @return Response
     */
    public function index()
    {
        return parent::index();
    }

    /**
     * Read
     * 
     * Retrieve a specific alias 
     *
     * @param  int  $id
     * @urlParam id required The ID of the Alias. Example: 3
     * @return Response
     * 
     * @response {
     *      "id": "3",
     *      "family_name": "Jefferson",
     *      "type": "role",
     *      "name_id": 6
     * }
     * 
     * @response 404 {
     *      "message": "No query results for model"
     * }
     */
    public function show($id)
    {
        return parent::show($id);
    }

     /**
     * Edit
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Alias. Example: 3
     * @bodyParam name_id int optional The id of the name. Example: 1
     * @bodyParam type string optional The type of alias. Example: role
     * @bodyParam family_name string optional The family name for the alias. Example: Buren
     * @bodyParam given_name string optional The given name for the alias. Example: Martin  
     * @bodyParam middle_name string optional The middle name for the alias. Example: Van 
     * @bodyParam suffix string optional The suffix for the alias. Example: Mr.
     * @bodyParam title string optional The title for the alias. Example: President
     * @bodyParam role string optional The role for the alias.
     * @bodyParam public_notes text optional The public notes for the alias. 
     * @bodyParam staff_notes text optional The staff notes for the alias. 
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return parent::update($request, $id);
    }

    /**
     * Add
     *
     * @param  Request  $request
     * @bodyParam name_id int required The id of the name. Example: 3
     * @bodyParam type string required The type of alias. Example: role
     * @bodyParam family_name string required The family name for the alias. Example: Buren
     * @bodyParam given_name string optional The given name for the alias. Example: Martin  
     * @bodyParam middle_name string optional The middle name for the alias. Example: Van 
     * @bodyParam suffix string optional The suffix for the alias. Example: Mr.
     * @bodyParam title string optional The title for the alias. Example: President
     * @bodyParam role string optional The role for the alias.
     * @bodyParam public_notes text optional The public notes for the alias. 
     * @bodyParam staff_notes text optional The staff notes for the alias. 
     * @return Response
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

     /**
     * Delete 
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Alias. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     *      CUSTOM METHODS
     *         OUTSIDE
     *        BASIC CRUD
     */


    /**
     * Retrieve the name for an Alias
     *
     * @param  int  $id
     * @return Response
     */   
    public function getName($id) 
    {
        return response()->json($this->model->findOrFail($id)->name);
    }
}