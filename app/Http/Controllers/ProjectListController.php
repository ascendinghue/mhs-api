<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Project Lists
 *
 * APIs for managing project lists
 */
class ProjectListController extends CrudController
{
    public function __construct(\Models\ProjectList $list)
    {
        parent::__construct($list);
    }

}