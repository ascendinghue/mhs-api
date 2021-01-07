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
     * @urlParam id required The ID of the Document. Example: 3
     * @bodyParam filename string required The filename of the Document. Example: file.pdf
     * @bodyParam project_id int required The project id of Document. Example: 6
     * @bodyParam notes string optional The notes for the document.
     * @bodyParam author string required The author for the document.
     * @bodyParam document_date date required The date for the document.
     * @bodyParam document_type string required The type of the document.
     * @bodyParam published boolean optional The published status for the document.
     * @bodyParam publish_date date optional The publish date for the document.
     * @bodyParam checked_out boolean optional The checked out status for the document. 
     * @return Response
     */
    public function update(Request $request, $id)
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

        Document::findOrFail($id)->update(
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

        return response(null, 204);
    }    
    
    /**
     * Add
     *
     * @param  Request  $request
     * @bodyParam filename string required The filename of the Document. Example: file.pdf
     * @bodyParam project_id int required The project id of Document. Example: 6
     * @bodyParam notes string optional The notes for the document.
     * @bodyParam author string required The author for the document.
     * @bodyParam document_date date required The date for the document.
     * @bodyParam document_type string required The type of the document.
     * @bodyParam published boolean optional The published status for the document.
     * @bodyParam publish_date date optional The publish date for the document.
     * @bodyParam checked_out boolean optional The checked out status for the document. 
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