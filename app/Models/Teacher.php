<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'phone',
        'qualification',
        'department',
        'designation',
        'joining_date',
        'status',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
