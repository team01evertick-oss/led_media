<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'slug', 'client', 'location', 'project_type', 'description', 'content', 'featured_image_id', 'gallery', 'specs', 'is_featured', 'status', 'order', 'completed_at'];
    protected function casts(): array { return ['gallery' => 'array', 'specs' => 'array', 'is_featured' => 'boolean', 'completed_at' => 'date']; }

    public function featuredImage() { return $this->belongsTo(Media::class, 'featured_image_id'); }
    public function seo() { return $this->morphOne(Seo::class, 'seoable'); }
}