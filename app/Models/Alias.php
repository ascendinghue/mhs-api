<?php

namespace Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Alias extends Model implements iCrudable
{
    protected $table = 'aliases';

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
    protected $with = ['name'];

    /**
     * Get all fields 
     *
     * @return Array
     */    
    public function getFields()
    {
        return [
            'name_id', 
            'type',
            'family_name',
            'given_name',
            'middle_name',
            'maiden_name',
            'suffix',
            'title',
            'role',
            'public_notes',
            'staff_notes'
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
            'family_name' => 'required',
            'type' => 'required|in:spelling,role'
        ];
    }

    /**
     * Get the name that owns the alias.
     */
    public function name()
    {
        return $this->belongsTo('Models\Name');
    }    
}
