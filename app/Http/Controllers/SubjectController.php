<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Subjects
 *
 * APIs for managing subjects
 */
class SubjectController extends CrudController
{
    public function __construct(\Models\Subject $subject)
    {
        parent::__construct($subject);
    }

    /**
     * Browse
     * 
     * Retrieve a list of Subjects
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
     * Retrieve the specified Subject
     *
     * @param  int  $id
     * @urlParam id required The ID of the Subject. Example: 3
     * @return Response
     * 
     * @response {
     *   "id": "3",
     *   "subject_name": "grandchild",
     *   "display_name": "this is a grandchild"
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
     * Update the specified Subject
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Subject. Example: 3
     * @bodyParam subject_name string optional The subject name of the Subject.
     * @bodyParam display_name string optional The display name of the Subject.
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return parent::update($request, $id);
    }
    
    /**
     * Add 
     * 
     * Create a new Subject
     *
     * @param  Request  $request
     * @bodyParam subject_name string optional The subject name of the Subject.
     * @bodyParam display_name string optional The display name of the Subject.
     * @return Response
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

     /**
     * Delete
     * 
     * Remove the specified Subject
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Subject. Example: 3
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
     * Browse Subject's Projects
     * Retrieve the projects for the specified subject
     *
     * @param  int  $id
     * @urlParam id required The ID of the Subject. Example: 3
     * @return Response
     */   
    public function getProjects($id) 
    {
        return response()->json($this->model->findOrFail($id)->projects);
    }
}