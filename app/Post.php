<?php

namespace Makersblog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    // setNameAttribute

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;

    	if (! $this->exists) {
    		$this->attributes['slug'] = str_slug($value, "-");
    	} 
    }
}