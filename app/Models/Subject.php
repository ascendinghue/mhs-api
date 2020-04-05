<?php

namespace Models;

use App\Interfaces\iCrudable;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model implements iCrudable
{
    use NodeTrait;

    protected $table = 'subjects';
    protected $primaryKey = "id";
    
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
        'updated_at',
        'pivot',
        '_lft',
        '_rgt',
        'parent_id'
    ];

    /**
     * The relationships that should be eager loaded.
     *
     * @var array
     */
    protected $with = [];

    /**
     * The projects that belong to the subject.
     */
    public function projects()
    {
        return $this->belongsToMany('Models\Project');
    }

    /**
     * Get all fields 
     *
     * @return Array
     */    
    public function getFields()
    {
        return [
            'subject_name', 
            'display_name', 
            'staff_notes',
            'keywords',
            'loc'
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
            'subject_name' => 'required',
            'display_name' => 'required'
        ];
    }
}
