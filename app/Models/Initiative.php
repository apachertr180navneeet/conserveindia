<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Initiative extends Model
{
    protected $fillable = [
        'title',
        'category',
        'meta',
        'short_description',
        'content',
        'image',
        'link',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Standard categories for initiatives.
     */
    public static function categories(): array
    {
        return [
            'livelihoods' => 'Livelihoods & Artisans',
            'patent'      => 'Patents & Material R&D',
            'community'   => 'Community & Advocacy',
            'products'    => 'Brands & Products',
            'youth'       => 'Youth Incubator',
        ];
    }

    /**
     * Get human-readable category label.
     */
    public function getCategoryLabelAttribute(): string
    {
        $cats = self::categories();
        return $cats[$this->category] ?? (ucwords(str_replace(['-', '_'], ' ', $this->category ?? 'Community')));
    }

    /**
     * Get resolved image URL.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('website/assets/images/upcycling-innovation.jpg');
        }
        if (str_starts_with($this->image, 'http')) {
            return $this->image;
        }
        if (str_starts_with($this->image, '/')) {
            return asset(ltrim($this->image, '/'));
        }
        return asset('website/' . ltrim($this->image, '/'));
    }

    /**
     * Get formatted clickable URL.
     */
    public function getFormattedLinkAttribute(): ?string
    {
        if (empty($this->link)) {
            return null;
        }
        if (str_starts_with($this->link, 'http') || str_starts_with($this->link, '#')) {
            return $this->link;
        }
        return url(ltrim($this->link, '/'));
    }
}
