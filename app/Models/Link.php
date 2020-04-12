<?php

namespace Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Link extends Model implements iCrudable
{
    protected $table = 'links';

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
    ];

    /**
     * Get all fields 
     *
     * @return Array
     */    
    public function getFields()
    {
        return [
            'type',
            'authority',
            'authority_id', 
            'display_title',
            'url',
            'notes'
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
            // 'name' => 'required',
            // 'project_id' => 'required',
            // 'type' => 'required|in:subject,name'
        ];
    }  

}
