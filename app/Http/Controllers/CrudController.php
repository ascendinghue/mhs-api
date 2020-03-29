<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\iCrudable;
use Laravel\Lumen\Routing\Controller as BaseController;

class CrudController extends BaseController
{
    private $_model = null;

    /**
     * Set model based on interface
     *
     * @return 
     */
    public function __construct(iCrudable $model)
    {
        $this->_model = $model;
    }

    /**
     * Retrieve all for model.
     *
     * @return Response
     */
    public function index()
    {
        return response()->json($this->_model->all());
    }

    /**
     * Retrieve the model for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return response()->json($this->_model->findOrFail($id));
    }

     /**
     * Delete the specified model.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function delete($id)
    {
        $this->_model->findOrFail($id)->delete();

        return response('Deleted Successfully', 200);
    }

    /**
     * Store a new model.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->_model->getValidations());

        return $this->_model->create(
            $request->only($this->_model->getFields())
        );
    }

     /**
     * Update the specified model.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->_model->findOrFail($id)->update(
            $request->only($this->_model->getFields())
        );
    }
}
