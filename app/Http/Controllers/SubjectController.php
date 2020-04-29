<?php

namespace App\Http\Controllers;

use Models\Subject;
use Illuminate\Http\Request;
use App\Http\Resources\Subject as SubjectResource;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @group Subjects
 *
 * APIs for managing subjects
 */
class SubjectController extends BaseController
{
    /**
     * Browse
     * 
     * Retrieve a list of Subjects
     *
     * @return Response
     */
    public function index()
    {
        return SubjectResource::collection(Subject::paginate());
    }

    /**
     * Read 
     * 
     * Retrieve the specified Subject
     *
     * @param  int  $id
     * @urlParam id required The ID of the Subject. Example: 3
     * @return Response
     * 
     * @response {
     *   "id": "3",
     *   "subject_name": "grandchild",
     *   "display_name": "this is a grandchild"
     * }
     * 
     * @response 404 {
     *      "message": "No query results for model"
     * }
     */
    public function show($id)
    {
        return new SubjectResource(Subject::findorfail($id));
    }

     /**
     * Edit 
     * 
     * Update the specified Subject
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Subject. Example: 3
     * @bodyParam subject_name string optional The subject name of the Subject.
     * @bodyParam display_name string optional The display name of the Subject.
     * @bodyParam staff_notes string optional The staff notes of the Subject.
     * @bodyParam keywords string optional The keywords of the subject.
     * @bodyParam loc string optional The loc of the subject.
     * @return Response
     */
    public function update(Request $request, $id)
    {
        Subject::findOrFail($id)->update(
            $request->only([
                'subject_name', 
                'display_name', 
                'staff_notes',
                'keywords',
                'loc'
            ])
        );

        return response(null, 204);
    }
    
    /**
     * Add 
     * 
     * Create a new Subject
     *
     * @param  Request  $request
     * @bodyParam subject_name string required The subject name of the Subject.
     * @bodyParam display_name string required The display name of the Subject.
     * @bodyParam staff_notes string optional The staff notes of the Subject.
     * @bodyParam keywords string optional The keywords of the subject.
     * @bodyParam loc string optional The loc of the subject.
     * @return Response
     * 
     * @response {
     *   "id": "3",
     *   "subject_name": "grandchild",
     *   "display_name": "this is a grandchild"
     *   "staff_notes": null,
     *   "keywords": null,
     *   "loc": null
     * } 
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject_name' => 'required',
            'display_name' => 'required'
        ]);

        $subject = Subject::create(
            $request->only([             
                'subject_name', 
                'display_name', 
                'staff_notes',
                'keywords',
                'loc'
            ])
        );

        return response(new SubjectResource($subject), 201);
    }

     /**
     * Delete
     * 
     * Remove the specified Subject
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Subject. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        Subject::findOrFail($id)->delete();

        return response(null, 204);
    }



    /**
     *      CUSTOM METHODS
     *         OUTSIDE
     *        BASIC CRUD
     */



    /**
     * Browse Subject's Projects
     * Retrieve the projects for the specified subject
     *
     * @param  int  $id
     * @urlParam id required The ID of the Subject. Example: 3
     * @return Response
     */   
    public function getProjects($id) 
    {
        return response()->json($this->model->findOrFail($id)->projects);
    }
}