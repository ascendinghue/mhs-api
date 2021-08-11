<?php

namespace App\Http\Controllers;

use Models\Name;
use Illuminate\Http\Request;
use App\Http\Resources\Name as NameResource;
use App\Http\Resources\Link as LinkResource;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Schema;
use App\Http\Middleware\QueryParams as QueryParams;


/**
 * @group Names
 *
 * APIs for managing names
 */
class NameController extends BaseController
{
    /**
     * Browse
     * 
     * Retrieve a list of names
     *
     * @urlParam per_page optional Limit page results. Example: 5
     * @urlParam page optional Page number to load: Example: 2
     * 
     * @return Response
     */
    public function index(Request $request)
    {
	return NameResource::collection(
		Name::where('family_name', 'like', '%'.$request->q.'%')
			->orWhere('given_name', 'like', '%'.$request->q.'%')
			->orWhere('maiden_name', 'like', '%'.$request->q.'%')
			->orWhere('middle_name', 'like', '%'.$request->q.'%')
			->orWhere('public_notes', 'like', '%'.$request->q.'%')
			->orWhere('staff_notes', 'like', '%'.$request->q.'%')
			->orWhere('title', 'like', '%'.$request->q.'%')
			->orWhere('name_key', 'like', '%'.$request->q.'%')
			->orderBy('created_at', 'desc')->paginate($request->query('per_page') ?? 100)
		);

		//find any fields
		$queryStrArr = $request->query();

		$query = Name::query();

		foreach($queryStrArr as $param => $value){
			if(Schema::hasColumn('names', $param)){
				$query->where($param, QueryParams::getOperator($value), QueryParams::cleanValue($value));
			}
		}

		return NameResource::collection($query->orderBy('created_at', 'desc')->paginate($request->query('per_page') ?? 10));

//        return NameResource::collection(Name::paginate($request->query('per_page') ?? 10));
    }


    public function checkNameKey(Request $request)
    {
	return Name::where('name_key', $request->q)->count();
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
     *   "date_of_birth": "1968-04-23",
     *   "date_of_death": null,
     *   "public_notes": null,
     *   "staff_notes": null,
     *   "aliases": [
     *       {
     *       "id": "6",
     *       "family_name": "testing",
     *       "given_name": "another test",
     *       "maiden_name": "",
     *       "middle_name": "",
     *       "suffix": "",
     *       "date_of_birth": "1968-04-23",
     *       "date_of_death": null,
     *       "public_notes": null,
     *       "staff_notes": null
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
		if(is_numeric($id)) return new NameResource(Name::findorfail($id));

		$name_key = $id;

		//treat $id as name_key
		return new NameResource(Name::where('name_key', "=", $name_key)->first());
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
     * @bodyParam date_of_birth string optional The date of birth of the name.
     * @bodyParam date_of_death string optional The date of death of the name.
     * @bodyParam public_notes string optional The public notes of the name.
     * @bodyParam staff_notes string optional The staff notes of the name.
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'family_name' => 'sometimes',
            'given_name' => 'sometimes',
            'maiden_name' => 'sometimes|nullable',
            'middle_name' => 'sometimes|nullable',
            'suffix' => 'sometimes|nullable',
            'date_of_birth' => 'sometimes|nullable|date_format:Y-m-d',
            'date_of_death' => 'sometimes|nullable|date_format:Y-m-d',
            'public_notes' => 'sometimes|nullable',
            'staff_notes' => 'sometimes|nullable',
			'variants' => 'sometimes',
			'professions' => 'sometimes',
			'title' => 'sometimes'
        ]);

        Name::findOrFail($id)->update(
            $request->only([
                'family_name',
                'given_name',
                'maiden_name',
                'middle_name',
                'suffix',
                'date_of_birth',
                'date_of_death',
                'public_notes',
                'staff_notes',
				'variants',
				'professions',
				'title'
            ])
        );

        return response(null, 204);
    }    

    /**
     * Add
     * 
     * Create a new name
     *
     * @param  Request  $request
     * @bodyParam family_name string optional The family name of the name. Example: John
     * @bodyParam given_name string optional The given name of the name. Example: Doe
     * @bodyParam maiden_name string optional The maiden name of the name.
     * @bodyParam middle_name string optional The middle name of the name.
     * @bodyParam suffix string optional The suffix of the name.
     * @bodyParam date_of_birth string optional The date of birth of the name.
     * @bodyParam date_of_death string optional The date of death of the name.
     * @bodyParam public_notes string optional The public notes of the name.
     * @bodyParam staff_notes string optional The staff notes of the name.
     * @return Response
     * 
     * @response {
     *   "id": "6",
     *   "family_name": "testing",
     *   "given_name": "another test",
     *   "maiden_name": "",
     *   "middle_name": "",
     *   "suffix": "",
     *   "date_of_birth": "1968-04-23",
     *   "date_of_death": null,
     *   "public_notes": null,
     *   "staff_notes": null
     * }
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'family_name' => 'required',
            'given_name' => 'required',
            'maiden_name' => 'nullable',
            'middle_name' => 'nullable',
            'suffix' => 'nullable',
            'date_of_birth' => 'nullable|date_format:Y-m-d',
            'date_of_death' => 'nullable|date_format:Y-m-d',
            'public_notes' => 'nullable',
            'staff_notes' => 'nullable',
			'variants' => 'nullable',
			'professions' => 'nullable',
			'title' => 'nullable'
        ]);

        $i = null;
        if (is_null($request->name_key)) {
            $nameKey = strtolower($request->given_name).'-'.strtolower($request->family_name);
            $nameKey .= (is_null($request->maiden_name)) ? '' : '-'.strtolower($request->maiden_name);
        }else{
            $nameKey = $request->name_key;
        }

        $nameKeyAppend = '';
        $nameKeyResults = Name::where('name_key', $nameKey . $nameKeyAppend)->first();
        while (!is_null($nameKeyResults)) {
            $i = $i + 1;
            $nameKeyAppend = '-' . $i;
            $nameKeyResults = Name::where('name_key', $nameKey . $nameKeyAppend)->first();
        }

        $name = Name::create(
            $request->only([
                'family_name',
                'given_name',
                'maiden_name',
                'middle_name',
                'suffix',
                'date_of_birth',
                'date_of_death',
                'public_notes',
                'staff_notes',
				'variants',
				'professions',
				'title'
            ])
        );

        $name->update([
            'name_key' => $nameKey . $nameKeyAppend,
            'first_created_by' => $request->identity->username
        ]);

        $name = $name->fresh();

        return response(new NameResource($name), 201);
    }

     /**
     * Delete 
     * 
     * Remove a specific name 
     *
     * @param  Request  $request
     * @param  string  $id
     * @urlParam id required The ID of the Name. Example: 3
     * @return Response
     */
    public function delete($id)
    {
        Name::findOrFail($id)->delete();

        return response(null, 204);
    }

    /**
     *      CUSTOM METHODS
     *         OUTSIDE
     *        BASIC CRUD
     */
    
    /**
     * Browse Links
     * 
     * Retrieve a list of links for a specific name
     *
     * @param  int  $id
     * @urlParam id required The ID of the name. Example: 3
     * 
     * @return Response
     * 
     * @response [{
     *      "id": "3",
     *      "linkable_id": "4",
     *      "linkable_type": "Models\\Name",
     *      "type": "source",
     *      "authority": "snac",
     *      "authority_id": "12345",
     *      "display_title": "this is a link",
     *      "url": "www.yahoo.com",
     *      "notes": "n/a"
     * }]
     * 
     * @response 404 {
     *      "message": "No query results for model"
     * }
     */     
     public function getLinks($id)
     {
        return LinkResource::collection(Name::findorfail($id)->links);
     }
}
