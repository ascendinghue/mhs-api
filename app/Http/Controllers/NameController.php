<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Names
 *
 * APIs for managing names
 */
class NameController extends CrudController
{
    public function __construct(\Models\Name $name)
    {
        parent::__construct($name);
    }

}