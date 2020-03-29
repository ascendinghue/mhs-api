<?php

namespace App\Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model implements iCrudable
{
    protected $table = 'subjects';

    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

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
