<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @group Links
 *
 * APIs for managing links
 */
class LinkController extends CrudController
{
    public function __construct(\Models\Link $link)
    {
        parent::__construct($link);
    }

}