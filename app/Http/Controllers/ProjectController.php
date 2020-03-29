<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends CrudController
{
    public function __construct(\Models\Project $project)
    {
        parent::__construct($project);
    }
}