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
}
