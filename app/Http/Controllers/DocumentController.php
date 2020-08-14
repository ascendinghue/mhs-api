<?php

namespace App\Http\Controllers;

use Models\Document;
use Illuminate\Http\Request;
use App\Http\Resources\Document as DocumentResource;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @group Document
 *
 * APIs for managing dopcuments
 */
class DocumentController extends BaseController
{
    /**
     * Browse
     * 
     * Retrieve a list of documents
     *
     * @urlParam per_page optional Limit page results. Example: 5
     * @urlParam page optional Page number to load: Example: 2
     * 
     * @return Response
     */
    public function index(Request $request)
    {
        return DocumentResource::collection(Document::paginate($request->query('per_page') ?? 10));
    }

    /**
     * Read
     * 
     * Retrieve a specific document 
     *
     * @param  int  $id
     * @urlParam id required The ID of the Document. Example: 3
     * @return Response
     * 
     * @response {
     *      "id": "3",
     *      "filename": "this is a test",
     *      "project_id": "63",
     *      "notes": null,
     *      "author": "Test Author",
     *      "document_date": null,
     *      "document_type": "test-document-type",
     *      "published": "0",
     *      "publish_date": "2020-08-29 00:00:00.000",
     *      "checked_out": "0"
     * }
     * 
     * @response 404 {
     *      "message": "No query results for model"
     * }
     */
    public function show($id)
    {
        return new DocumentResource(Document::findorfail($id));
    }    

     /**
     * Edit
     * 
     * Update the specified Document
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Alias. Example: 3
     * @bodyParam name_id int optional The id of the name. Example: 1
     * @bodyParam type string optional The type of alias. Example: role
     * @bodyParam family_name string optional The family name for the alias. Example: Buren
     * @bodyParam given_name string optional The given name for the alias. Example: Martin  
     * @bodyParam middle_name string optional The middle name for the alias. Example: Van 
     * @bodyParam suffix string optional The suffix for the alias. Example: Mr.
     * @bodyParam title string optional The title for the alias. Example: President
     * @bodyParam role string optional The role for the alias.
     * @bodyParam public_notes text optional The public notes for the alias. 
     * @bodyParam staff_notes text optional The staff notes for the alias. 
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_id' => 'sometimes|exists:names,id',
            'type' => 'sometimes|in:spelling,role'
        ]);

        Alias::findOrFail($id)->update(
            $request->only([
                'name_id',
                'type',
                'family_name',
                'given_name',
                'middle_name',
                'maiden_name',
                'suffix',
                'title',
                'role',
                'public_notes',
                'staff_notes'
            ])
        );

        return response(null, 204);
    }    
    
    /**
     * Add
     *
     * @param  Request  $request
     * @bodyParam name_id int required The id of the name. Example: 3
     * @bodyParam type string required The type of alias. Example: role
     * @bodyParam family_name string required The family name for the alias. Example: Buren
     * @bodyParam given_name string optional The given name for the alias. Example: Martin  
     * @bodyParam middle_name string optional The middle name for the alias. Example: Van 
     * @bodyParam suffix string optional The suffix for the alias. Example: Mr.
     * @bodyParam title string optional The title for the alias. Example: President
     * @bodyParam role string optional The role for the alias.
     * @bodyParam public_notes text optional The public notes for the alias. 
     * @bodyParam staff_notes text optional The staff notes for the alias. 
     * @return Response
     * 
     * @response {
     *      "id": "3",
     *      "filename": "this is a test",
     *      "project_id": "63",
     *      "notes": null,
     *      "author": "Test Author",
     *      "document_date": null,
     *      "document_type": "test-document-type",
     *      "published": "0",
     *      "publish_date": "2020-08-29 00:00:00.000",
     *      "checked_out": "0"
     * }
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'required',
            'project_id' => 'required|exists:projects,id',
            'notes' => 'present|nullable',
            'author' => 'required',
            'document_date' => 'present|nullable',
            'document_type' => 'required',
            'published' => 'sometimes|boolean',
            'publish_date' => 'sometimes|date_format:Y-m-d',
            'checked_out' => 'sometimes|boolean'
        ]);

        $document = Document::create(
            $request->only([    
                'filename',
                'project_id',
                'notes',
                'author',
                'document_date',
                'document_type',
                'published',
                'publish_date',
                'checked_out'
            ])
        );

        return response(new DocumentResource($document), 201);
    }

     /**
     * Delete 
     * 
     * Remove a specific document
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the document. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        Document::findOrFail($id)->delete();

        return response(null, 204);
    }     

    /**
     * Update Document Step 
     * 
     * Update the specified Document Step 
     *
     * @param  int  $id
     * @param  Request  $request
     * @bodyParam step_id int required The id of the step. Example: 3
     * @bodyParam status int required The status of the step. Example: 2
     * @return Response
     * 
     * @return Response
     */
    public function updateDocumentStep($id, Request $request)
    {
        $this->validate($request, [
            'step_id' => 'required|exists:steps,id',
            'status' => 'required|numeric'
        ]);

        $document = Document::findorfail($id);
        $document->steps()->updateExistingPivot($request->step_id, [
            'status' => $request->status
        ]);

        return response(null, 204);
    }
}