<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    use HasFactory;
    protected $fillable = [
        'page',
        'fact1',
        'fact2',
        'fact3',
        'fact4',
        'fact1value',
        'fact2value',
        'fact3value',
        'fact4value',
    ];
}
