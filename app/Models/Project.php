<?php

namespace App\Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model implements iCrudable
{
    protected $table = 'projects';

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
