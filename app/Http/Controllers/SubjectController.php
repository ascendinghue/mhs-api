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
     * Retrieve the projects for the specified subject
     *
     * @param  int  $id
     * @return Response
     */   
    public function getProjects($id) 
    {
        return response()->json($this->model->findOrFail($id)->projects);
    }
}