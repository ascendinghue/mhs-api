<?php

namespace App\Http\Controllers;

use App\Models\Subject;

use Illuminate\Http\Request;

class SubjectController extends CrudController
{
    public function __construct(Subject $subject)
    {
        parent::__construct($subject);
    }
}