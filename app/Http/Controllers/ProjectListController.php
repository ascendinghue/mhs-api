<?php

namespace App\Http\Controllers;

use Models\ProjectList;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectList as ProjectListResource;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @group Lists
 *
 * APIs for managing project lists
 */
class ProjectListController extends BaseController
{
    /**
     * Browse
     * 
     * Retrieve a list of lists
     *
     * @return Response
     */
    public function index()
    {
        return ProjectListResource::collection(ProjectList::paginate());
    }

    /**
     * Read
     * 
     * Retrieve a specific list
     *
     * @param  int  $id
     * @urlParam id required The ID of the List. Example: 3
     * @return Response
     * 
     * @response {
     *   "id": "2",
     *   "project_id": "123-456-789",
     *   "name": "associated subjects",
     *   "type": "subject",
     *   "description": null
     * }
     * 
     * @response 404 {
     *      "message": "No query results for model"
     * }
     */
    public function show($id)
    {
        return new ProjectListResource(ProjectList::with(['subjects', 'names'])->findorfail($id));
    }

     /**
     * Edit
     *
     * Update a specific list
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the List. Example: 3
     * @bodyParam project_id string optional The project id of the list. Example: 123-456-789
     * @bodyParam name string optional The name of the list. Example: associated subjects
     * @bodyParam type string optional The type of the list. Example: subject
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'project_id' => 'sometimes',
            'name' => 'sometimes',
            'type' => 'sometimes|in:subject,name'
        ]);

        ProjectList::findOrFail($id)->update(
            $request->only([
                'project_id',
                'name', 
                'type',
                'description'
            ])
        );

        return response(null, 204);
    }    

    /**
     * Add
     *
     * Create a new list
     * 
     * @param  Request  $request
     * @bodyParam project_id string required The project id of the list. Example: 123-456-789
     * @bodyParam name string required The name of the list. Example: associated subjects
     * @bodyParam type string required The type of the list. Example: subject
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'project_id' => 'required',
            'type' => 'required|in:subject,name'
        ]);

        $projectList = ProjectList::create(
            $request->only([             
                'project_id',
                'name', 
                'type',
                'description'
            ])
        );

        return response(new ProjectListResource($projectList), 201);
    }

     /**
     * Delete 
     *
     * Remove a specific list
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the List. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        ProjectList::findOrFail($id)->delete();

        return response(null, 204);
    }

    /**
     *      CUSTOM METHODS
     *         OUTSIDE
     *        BASIC CRUD
     */
    
     /**
     * Name Toggle
     *
     * Toggle a name for a specific list
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the List. Example: 3
     * @bodyParam name_id string required The name id to be toggled for the list. Example: 28
     * @return Response
     */     
     public function nameToggle(Request $request, $id)
    {
        $this->validate($request, [
            'name_id' => 'required|exists:names,id'
        ]);

        ProjectList::findOrFail($id)->names()->toggle($request->name_id);

        return response(null, 204);
    }

     /**
     * Subject Toggle
     *
     * Toggle a subject for a specific list
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the List. Example: 3
     * @bodyParam subject_id string required The subject id to be toggled for the list. Example: 28
     * @return Response
     */        
    public function subjectToggle(Request $request, $id)
    {
        $this->validate($request, [
            'subject_id' => 'required|exists:subjects,id'
        ]);

        ProjectList::findOrFail($id)->subjects()->toggle($request->subject_id);

        return response(null, 204);
    }
}