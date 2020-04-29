<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Projects
 *
 * APIs for managing projects
 */
class ProjectController extends CrudController
{
    public function __construct(\Models\Project $project)
    {
        parent::__construct($project);
    }

    /**
     * Browse
     * 
     * Retrieve a list of Projects
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
     * Retrieve the specified Project
     *
     * @param  int  $id
     * @urlParam id required The ID of the Project. Example: 3
     * @return Response
     * 
     * @response {
     *   "id": "10",
     *   "project_id": "111-5-585-156",
     *   "name": "another test",
     *   "description": "testing"
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
     * Update the specified Project
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Project. Example: 3
     * @bodyParam project_id string optional The project id of the Project. Example: 111-5-585-1566
     * @bodyParam name string optional The name of the Project. Example: 1800s Project
     * @bodyParam description string optional The description of the Project. 
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return parent::update($request, $id);
    }
    
    /**
     * Add 
     * 
     * Create a new Project
     *
     * @param  Request  $request
     * @bodyParam project_id string required The project id of the Project. Example: 111-5-585-1566
     * @bodyParam name string required The name of the Project. Example: 1800s Project
     * @bodyParam description required optional The description of the Project. 
     * @return Response
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

     /**
     * Delete
     * 
     * Remove the specified Project
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Project. Example: 3
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
     * Browse Subjects
     * 
     * Retrieve subjects for a Project
     *
     * @param  int  $id
     * @return Response
     */    
    public function getSubjects($id)
    {
        return response()->json($this->model->findOrFail($id)->subjects);
    }

    /**
     * Add Subject
     * 
     * Add Subject to a Project
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */        
    public function addSubject(Request $request, $id)
    {
        $this->validate($request, [
            'subject_id' => 'required|exists:subjects,id'
        ]);

        $this->model->findOrFail($id)->subjects()->attach($request->input('subject_id'));

        return response(null, 201);
    }

    /**
     * Delete Subject
     * 
     * Remove subject from a Project
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */         
    public function removeSubject(Request $request, $id)
    {
        $this->validate($request, [
            'subject_id' => 'required|exists:subjects,id'
        ]);

        $this->model->findOrFail($id)->subjects()->detach($request->input('subject_id'));

        return response(null, 204);
    }
}