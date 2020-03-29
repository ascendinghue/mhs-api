<?php

namespace Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model implements iCrudable
{
    protected $table = 'subjects';

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
    protected $with = [];

    /**
     * The projects that belong to the subject.
     */
    public function projects()
    {
        return $this->belongsToMany('Models\Project', 'project_subject', 'id', 'id');
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
