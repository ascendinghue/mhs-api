<?php

namespace Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class ProjectList extends Model implements iCrudable
{
    protected $table = 'lists';

    public $resource = 'App\Http\Resources\CrudResource';
    public $collection = 'App\Http\Resources\CrudCollection';

    protected $guarded = [];

    /**
     * The fields that shouldn't be shown
     *
     * @var array
     */    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * The relationships that should be eager loaded.
     *
     * @var array
     */
    protected $with = [
        'subjects',
        'names'
    ];

    /**
     * Get all fields 
     *
     * @return Array
     */    
    public function getFields()
    {
        return [
            'project_id',
            'name', 
            'type',
            'description'
        ];
    }

    /**
     * Get all validations 
     *
     * @return Array
     */    
    public function getValidations()
    {
        return [
            'name' => 'required',
            'project_id' => 'required',
            'type' => 'required|in:subject,name'
        ];
    }  

    /**
     * Get all of the subjects that are assigned this list.
     */
    public function subjects()
    {
        return $this->morphedByMany('Models\Subject', 'listable');
    }

    /**
     * Get all of the names that are assigned this list.
     */
    public function names()
    {
        return $this->morphedByMany('Models\Name', 'listable');
    }    
}
