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
     * Retrieve the subjects for the specified project
     *
     * @param  int  $id
     * @return Response
     */    
    public function getSubjects($id)
    {
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

        return $this->model->findOrFail($id)->subjects()->attach($request->input('subject_id'));
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

        return response('Deleted Successfully', 200);
    }
}