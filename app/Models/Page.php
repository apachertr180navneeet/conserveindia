<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'page_key',
        'page_name',
        'slug',
        'subtitle',
        'title',
        'lead_text',
        'content',
        'banner_image',
        'extra_data',
        'is_active',
    ];

    protected $casts = [
        'extra_data' => 'array',
        'is_active' => 'boolean',
    ];

    public static function forPage($pageKey)
    {
        return static::where('page_key', $pageKey)->first();
    }
}

