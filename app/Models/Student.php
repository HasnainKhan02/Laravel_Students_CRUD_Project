<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Database table ka naam (optional, agar Laravel naming convention follow ho rahi ho)
    protected $table = 'students';

    // Mass assignment ke liye fillable fields define karein
    protected $fillable = [
        'name',
        'email',
        'university',
        'department',
        'subject',
        'semester',
        'phone',
    ];
}
