<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageLayout extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'position'
    ];
}
