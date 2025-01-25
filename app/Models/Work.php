<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    /** @use HasFactory<\Database\Factories\WorkFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
    ];

    public function workEmployer() {
        return $this->belongsToMany(Employer::class);
    }

    public function workEmployee() {
        return $this->belongsToMany(Employee::class);
    }
}
