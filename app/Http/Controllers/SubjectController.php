<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends CrudController
{
    public function __construct(\Models\Subject $subject)
    {
        parent::__construct($subject);
    }
}