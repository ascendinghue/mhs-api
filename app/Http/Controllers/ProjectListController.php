<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Lists
 *
 * APIs for managing project lists
 */
class ProjectListController extends CrudController
{
    public function __construct(\Models\ProjectList $list)
    {
        parent::__construct($list);
    }

    /**
     * Browse
     * 
     * Retrieve a list of lists
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
     * Retrieve a specific list
     *
     * @param  int  $id
     * @urlParam id required The ID of the List. Example: 3
     * @return Response
     * 
     * @response {
     *   "id": "2",
     *   "project_id": "123-456-789",
     *   "name": "associated subjects",
     *   "type": "subject"
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
     * Update a specific list
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the List. Example: 3
     * @bodyParam project_id string optional The project id of the list. Example: 123-456-789
     * @bodyParam name string optional The name of the list. Example: associated subjects
     * @bodyParam type string optional The type of the list. Example: subject
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return parent::update($request, $id);
    }    

    /**
     * Add
     *
     * Create a new list
     * 
     * @param  Request  $request
     * @bodyParam project_id string optional The project id of the list. Example: 123-456-789
     * @bodyParam name string optional The name of the list. Example: associated subjects
     * @bodyParam type string optional The type of the list. Example: subject
     * @return Response
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

     /**
     * Delete 
     *
     * Remove a specific list
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the List. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }    
}