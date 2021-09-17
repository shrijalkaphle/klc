<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'keyword',
        'logo',
        'favicon',
        'address',
        'phone',
        'email',
        'timing',
        'iframe',
        'termscondition',
        'privacypolicy',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
    ];
}
