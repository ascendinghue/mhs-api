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
     * Retrieve all Projects
     *
     * @return Response
     */
    public function index()
    {
        return parent::index();
    }


    /**
     * Retrieve the specified Project
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return parent::show($id);
    }


     /**
     * Delete the specified Project
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }

    /**
     * Store a new Project
     *
     * @param  Request  $request
     * @bodyParam project_id string required The id of the project. Example: 123-4567-89
     * @bodyParam name string required The name of the project. 
     * @bodyParam description required The description of the project.
     * @return Response
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

     /**
     * Update the specified Project
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return parent::update($request, $id);
    }

    /**
     *      CUSTOM METHODS
     *         OUTSIDE
     *        BASIC CRUD
     */


    /**
     * Retrieve subjects for a Project
     *
     * @param  int  $id
     * @return Response
     */    
    public function getSubjects($id)
    {
        // return new $this->model->resource($this->model->findOrFail($id)->subjects);
        return response()->json($this->model->findOrFail($id)->subjects);
    }

    /**
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