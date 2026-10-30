<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $fillable = [
        'page_key',
        'page_name',
        'url_path',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image',
        'robots',
        'canonical_url',
        'schema_markup',
    ];

    public static function forPage($pageKey)
    {
        return static::where('page_key', $pageKey)->first();
    }
}

