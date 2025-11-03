<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'description',
        'university_id',
        'duration',
        'credits',
        'department'
    ];

    /**
     * Get the university that offers this course.
     */
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    /**
     * Get the students enrolled in this course.
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_student')
            ->whereHas('role', function($query) {
                $query->where('name', 'Student');
            });
    }

    /**
     * Get the supervisors teaching this course.
     */
    public function supervisors()
    {
        return $this->belongsToMany(User::class, 'course_supervisor')
            ->whereHas('role', function($query) {
                $query->where('name', 'Supervisor');
            });
    }
}
