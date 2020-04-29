<?php

namespace App\Http\Controllers;

use Models\Name;
use Illuminate\Http\Request;
use App\Http\Resources\Name as NameResource;

/**
 * @group Names
 *
 * APIs for managing names
 */
class NameController extends CrudController
{
    public function __construct(Name $name)
    {
        parent::__construct($name);
    }

    /**
     * Browse
     * 
     * Retrieve a list of names
     *
     * @return Response
     */
    public function index()
    {
        return NameResource::collection(Name::paginate());
    }

    /**
     * Read
     * 
     * Retrieve a specific name 
     *
     * @param  int  $id
     * @urlParam id required The ID of the name. Example: 3
     * @return Response
     * 
     * @response {
     *   "id": "6",
     *   "family_name": "testing",
     *   "given_name": "another test",
     *   "maiden_name": "",
     *   "middle_name": "",
     *   "suffix": "",
     *   "keywords": "",
     *   "date_of_birth": "1968-04-23",
     *   "date_of_death": null,
     *   "public_notes": null,
     *   "staff_notes": null,
     *   "bio_filename": null,
     *   "aliases": [
     *       {
     *       "id": "6",
     *       "family_name": "testing",
     *       "given_name": "another test",
     *       "maiden_name": "",
     *       "middle_name": "",
     *       "suffix": "",
     *       "keywords": "",
     *       "date_of_birth": "1968-04-23",
     *       "date_of_death": null,
     *       "public_notes": null,
     *       "staff_notes": null,
     *       "bio_filename": null
     *       }
     *   ]
     * }
     * 
     * @response 404 {
     *      "message": "No query results for model"
     * }
     */
    public function show($id)
    {
        return new NameResource(Name::findorfail($id));
    }
    
     /**
     * Edit
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Name. Example: 3
     * @bodyParam family_name string optional The family name of the name. Example: John
     * @bodyParam given_name string optional The given name of the name. Example: Doe
     * @bodyParam maiden_name string optional The maiden name of the name.
     * @bodyParam middle_name string optional The middle name of the name.
     * @bodyParam suffix string optional The suffix of the name.
     * @bodyParam keywords string optional The keywords of the name.
     * @bodyParam date_of_birth string optional The date of birth of the name.
     * @bodyParam date_of_death string optional The date of death of the name.
     * @bodyParam public_notes string optional The public notes of the name.
     * @bodyParam staff_notes string optional The staff notes of the name.
     * @bodyParam bio_filename string optional The bio filename of the name.
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
     * @bodyParam family_name string optional The family name of the name. Example: John
     * @bodyParam given_name string optional The given name of the name. Example: Doe
     * @bodyParam maiden_name string optional The maiden name of the name.
     * @bodyParam middle_name string optional The middle name of the name.
     * @bodyParam suffix string optional The suffix of the name.
     * @bodyParam keywords string optional The keywords of the name.
     * @bodyParam date_of_birth string optional The date of birth of the name.
     * @bodyParam date_of_death string optional The date of death of the name.
     * @bodyParam public_notes string optional The public notes of the name.
     * @bodyParam staff_notes string optional The staff notes of the name.
     * @bodyParam bio_filename string optional The bio filename of the name.
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
     * @urlParam id required The ID of the Name. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }
}