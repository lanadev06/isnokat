<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function parent()
    {
        return $this->belongsTo(Location::class,'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }
}
