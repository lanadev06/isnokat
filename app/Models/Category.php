<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function work()
    {
        return $this->hasMany(Work::class);
    }
}
