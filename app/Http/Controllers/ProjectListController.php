<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectListController extends CrudController
{
    public function __construct(\Models\ProjectList $list)
    {
        parent::__construct($list);
    }

}