<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
        'contact_number',
        'email',
        'website',
        'description'
    ];

    /**
     * Get the students associated with this university.
     */
    public function students()
    {
        return $this->hasMany(User::class)->whereHas('role', function($query) {
            $query->where('name', 'Student');
        });
    }

    /**
     * Get the supervisors associated with this university.
     */
    public function supervisors()
    {
        return $this->hasMany(User::class)->whereHas('role', function($query) {
            $query->where('name', 'Supervisor');
        });
    }
}
