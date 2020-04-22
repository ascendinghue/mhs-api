<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return new $this->model->collection($this->model->all());
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
        $this->validate($request, $this->model->getValidations());

        $this->model->create($request->only($this->model->getFields()));

        return response(null, 201);
    }

    /**
     * Retrieve the subjects for the specified project
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
     * Create subject relationship for the specified project
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
     * Remove subject relationship for the specified project
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