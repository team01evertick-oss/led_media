<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = ['title', 'slug', 'tagline', 'description', 'overview', 'solutions_offered', 'faqs', 'icon', 'cta_title', 'featured_image_id', 'is_active', 'order', 'status'];
    protected function casts(): array { return ['solutions_offered' => 'array', 'faqs' => 'array', 'is_active' => 'boolean']; }

    public function featuredImage() { return $this->belongsTo(Media::class, 'featured_image_id'); }
    public function seo() { return $this->morphOne(Seo::class, 'seoable'); }
}