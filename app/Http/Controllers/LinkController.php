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

    /**
     * Browse
     * 
     * Retrieve a list of links
     *
     * @return Response
     */
    public function index()
    {
        return parent::index();
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
        return parent::show($id);
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
        return parent::update($request, $id);
    }    
    
    /**
     * Add
     *
     * @param  Request  $request
     * @bodyParam type string optional The type of the link. Example: source
     * @bodyParam authority string optional The authority of the link. Example: snac  
     * @bodyParam authority_id string optional The authority id of the link. Example: 123456
     * @bodyParam display_title string optional The display title of the link. Example: Click me
     * @bodyParam url string optional The url of the link. Example: www.yahoo.com
     * @bodyParam notes string optional The notes of the link. Example: n/a
     * @return Response
     */
    public function store(Request $request)
    {
        return parent::store($request);
    }

     /**
     * Delete 
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Link. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }
}