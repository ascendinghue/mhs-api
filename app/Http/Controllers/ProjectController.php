<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct(Project $project)
    {
        $this->_model = $project;
        $this->_fields = ['project_id', 'name', 'description'];
        $this->_validations = [
            'project_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ];
    }
    
}