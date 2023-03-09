<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'blog_category',
        'blog_tags',
        'short_description',
        'content',
        'image',
    ];
}
