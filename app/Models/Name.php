<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */    
    protected $appends = ['name_key'];
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */    
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

    /**
     * The projects that belong to the name.
     */
    public function projects()
    {
        return $this->belongsToMany('Models\Project');
    }
}
