<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subof',
        'slug',
        'content',
        'image',
        'banner',
        'link',
        'footer',
        'status'
    ];

    public function mainpage() {
        return $this->belongsTo(MainMenu::class, 'subof','id');
    }
}
