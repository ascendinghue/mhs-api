<?php

namespace Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model implements iCrudable
{
    protected $table = 'projects';

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
        'subjects'
    ];

    /**
     * The subjects that belong to the project.
     */
    public function subjects()
    {
        return $this->belongsToMany('Models\Subject');
    }

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
            'project_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ];
    }
}
