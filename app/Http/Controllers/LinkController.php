<?php

namespace App\Http\Controllers;

use Models\Link;
use Illuminate\Http\Request;
use App\Http\Resources\Link as LinkResource;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * @group Links
 *
 * APIs for managing links
 */
class LinkController extends BaseController
{
    /**
     * Browse
     * 
     * Retrieve a list of links
     *
     * @return Response
     */
    public function index()
    {
        return LinkResource::collection(Link::paginate());
    }

    /**
     * Read
     * 
     * Retrieve a specific link 
     *
     * @param  int  $id
     * @urlParam id required The ID of the Link. Example: 3
     * @return Response
     * 
     * @response {
     *      "id": "3",
     *      "linkable_id": "4",
     *      "linkable_type": "Models\\Subject",
     *      "type": "source",
     *      "authority": "snac",
     *      "authority_id": "12345",
     *      "display_title": "this is a link",
     *      "url": "www.yahoo.com",
     *      "notes": "n/a"
     * }
     * 
     * @response 404 {
     *      "message": "No query results for model"
     * }
     */
    public function show($id)
    {
        return new LinkResource(Link::findorfail($id));
    }

     /**
     * Edit
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Link. Example: 3
     * @bodyParam type string optional The type of the link. Example: source
     * @bodyParam authority string optional The authority of the link. Example: snac  
     * @bodyParam authority_id string optional The authority id of the link. Example: 123456
     * @bodyParam display_title string optional The display title of the link. Example: Click me
     * @bodyParam url string optional The url of the link. Example: www.yahoo.com
     * @bodyParam notes string optional The notes of the link. Example: n/a
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'sometimes|in:source,authority',
            'authority' => 'sometimes|in:snac,loc',
            'authority_id' => 'sometimes',
            'display_title' => 'sometimes',
            'url' => 'sometimes',
            'notes' => 'sometimes|nullable'
        ]);

        Link::findOrFail($id)->update(
            $request->only([
                'type',
                'authority',
                'authority_id', 
                'display_title',
                'url',
                'notes',
            ])
        );

        return response(null, 204);
    }    
    
    /**
     * Add
     *
     * Create a new link
     * 
     * @param  Request  $request
     * @bodyParam type string required The type of the link. Example: source
     * @bodyParam authority string required The authority of the link. Example: snac  
     * @bodyParam authority_id string required The authority id of the link. Example: 123456
     * @bodyParam display_title string required The display title of the link. Example: Click me
     * @bodyParam url string required The url of the link. Example: www.yahoo.com
     * @bodyParam notes string optional The notes of the link. Example: n/a
     * @bodyParam linkable_id 
     * @bodyParam linkable_type
     * @return Response
     * 
     * @response {
     *      "id": "3",
     *      "linkable_id": "4",
     *      "linkable_type": "Models\\Subject",
     *      "type": "source",
     *      "authority": "snac",
     *      "authority_id": "12345",
     *      "display_title": "this is a link",
     *      "url": "www.yahoo.com",
     *      "notes": "n/a"
     * }
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|in:source,authority',
            'authority' => 'required|in:snac,loc',
            'authority_id' => 'required',
            'display_title' => 'required',
            'url' => 'required',
            'notes' => 'nullable',
            
            'linkable_id' => 'required',
            'linkable_type' => 'required',
        ]);

        $link = Link::create(
            $request->only([             
                'type',
                'authority',
                'authority_id', 
                'display_title',
                'url',
                'notes',
                
                'linkable_id',
                'linkable_type'
            ])
        );

        return response(new LinkResource($link), 201);
    }

     /**
     * Delete 
     * 
     * Remove a specific link 
     * 
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Link. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        Link::findOrFail($id)->delete();

        return response(null, 204);
    }
}