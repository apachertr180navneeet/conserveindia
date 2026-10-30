<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'summary',
        'content',
        'image',
        'published_date',
        'is_active',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'published_date' => 'date',
    ];
}

