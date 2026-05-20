<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    protected $fillable = ['title', 'slug', 'category', 'excerpt', 'content', 'featured_image_id', 'is_featured', 'status', 'order', 'published_at'];
    protected function casts(): array { return ['is_featured' => 'boolean', 'published_at' => 'datetime']; }

    public function featuredImage() { return $this->belongsTo(Media::class, 'featured_image_id'); }
    public function seo() { return $this->morphOne(Seo::class, 'seoable'); }
}