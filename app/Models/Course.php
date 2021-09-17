<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'status'
    ];

    public function additional() {
        return $this->hasMany(CourseAdditional::class);
    }
}
