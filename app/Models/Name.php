<?php

namespace Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Name extends Model implements iCrudable
{
    protected $table = 'names';

    protected $guarded = [];

    /**
     * The fields that shouldn't be shown
     *
     * @var array
     */    
    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot'
    ];

    /**
     * The relationships that should be eager loaded.
     *
     * @var array
     */
    protected $with = [];

    /**
     * Get all fields 
     *
     * @return Array
     */    
    public function getFields()
    {
        return [
            'family_name', 
            'given_name',
            'middle_name',
            'suffix',
            'keywords',
            'date_of_birth',
            'date_of_death',
            'public_notes',
            'staff_notes',
            'bio_filename'
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
            'given_name' => 'required',
            'middle_name' => 'required',
            'suffix' => 'required',
            'keywords' => 'required',
            'date_of_birth' => 'required',
            'date_of_death' => 'required'
        ];
    }
}
