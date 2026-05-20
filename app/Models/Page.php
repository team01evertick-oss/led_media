<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'template', 'status', 'show_in_menu', 'featured_image_id', 'created_by'];
    protected function casts(): array { return ['show_in_menu' => 'boolean']; }

    public function sections() { return $this->hasMany(PageSection::class)->orderBy('order'); }
    public function featuredImage() { return $this->belongsTo(Media::class, 'featured_image_id'); }
    public function creator() { return $this->belongsTo(User::class, 'created_by'); }
    public function seo() { return $this->morphOne(Seo::class, 'seoable'); }

    public function isPublished(): bool { return $this->status === 'published'; }
}