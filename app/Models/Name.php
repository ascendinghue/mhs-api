<?php

namespace Models;

use App\Interfaces\iCrudable;
use Illuminate\Database\Eloquent\Model;

class Name extends Model implements iCrudable
{
    protected $table = 'names';

    public $resource = 'App\Http\Resources\NameResource';
    public $collection = 'App\Http\Resources\CrudCollection';

    protected $appends = ['name_key'];
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
        'aliases',
        'links'
    ];

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
            'maiden_name',
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
            'date_of_birth' => 'nullable|date_format:Y-m-d',
            'date_of_death' => 'nullable|date_format:Y-m-d'
        ];
    }

    /**
     * Get the Name's name_key
     *
     * @return string
     */    
    public function getNameKeyAttribute()
    {
        return implode('-',[
            strtolower($this->family_name),
            strtolower($this->given_name),
            strtolower($this->middle_name),
            strtolower($this->date_of_birth)
        ]);
    }

    /**
     * Get the aliases for the name
     */
    public function aliases()
    {
        return $this->hasMany('Models\Alias');
    }

    /**
     * Get all of the Name's links.
     */
    public function links()
    {
        return $this->morphMany('Models\Link', 'linkable');
    }    

}
