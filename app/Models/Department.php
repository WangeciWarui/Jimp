<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'code',
        'university_id',
        'description',
        'head_of_department',
        'contact_email',
        'contact_number'
    ];

    /**
     * Get the university this department belongs to.
     */
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    /**
     * Get the courses offered by this department.
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    /**
     * Get the supervisors in this department.
     */
    public function supervisors()
    {
        return $this->hasMany(User::class)
            ->whereHas('role', function($query) {
                $query->where('name', 'Supervisor');
            });
    }

    /**
     * Get the students in this department.
     */
    public function students()
    {
        return $this->hasMany(User::class)
            ->whereHas('role', function($query) {
                $query->where('name', 'Student');
            });
    }
}
