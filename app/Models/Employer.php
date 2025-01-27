<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class, 'employer_works');
    }

    public function work()
    {
        return $this->hasMany(Work::class);
    }

    public function fullname()
    {
        return $this->name . ' ' . $this->surname;
    }
}
