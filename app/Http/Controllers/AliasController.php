<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AliasController extends CrudController
{
    public function __construct(\Models\Alias $alias)
    {
        parent::__construct($alias);
    }

    /**
     * Retrieve the name for the specified alias
     *
     * @param  int  $id
     * @return Response
     */   
    public function getName($id) 
    {
        return response()->json($this->model->findOrFail($id)->name);
    }
}