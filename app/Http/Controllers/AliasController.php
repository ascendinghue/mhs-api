<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AliasController extends CrudController
{
    public function __construct(\Models\Alias $alias)
    {
        parent::__construct($alias);
    }

}