<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    /** @use HasFactory<\Database\Factories\WorkFactory> */
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'category_id',
        'company_id',
        'viewed',
        'name',
        'description',
        'salary',
        'work_type',
        'work_time',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
