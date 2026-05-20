<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['title', 'slug', 'tagline', 'description', 'what_it_is', 'where_used', 'benefits', 'features', 'faqs', 'cta_title', 'hero_eyebrow', 'featured_image_id', 'is_active', 'order', 'status'];
    protected function casts(): array { return ['where_used' => 'array', 'benefits' => 'array', 'features' => 'array', 'faqs' => 'array', 'is_active' => 'boolean']; }

    public function featuredImage() { return $this->belongsTo(Media::class, 'featured_image_id'); }
    public function seo() { return $this->morphOne(Seo::class, 'seoable'); }
}
