<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Retrieve the project for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Project::findOrFail($id);
    }

    /**
     * Store a new project.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = $request->only(['project_id', 'name', 'description']);
        return Project::create($data);
    }
}