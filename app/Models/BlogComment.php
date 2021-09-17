<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'blogs_id',
        'name',
        'comment'
    ];

    public function blog() {
        return $this->belongsTo(Blogs::class);
    }
}
