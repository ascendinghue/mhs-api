<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends CrudController
{
    public function __construct(Project $project)
    {
        parent::__construct($project);
    }
}