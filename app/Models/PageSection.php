<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = ['page_id', 'name', 'section_key', 'type', 'content', 'data', 'image_id', 'is_active', 'order'];
    protected function casts(): array { return ['data' => 'array', 'is_active' => 'boolean']; }

    public function page() { return $this->belongsTo(Page::class); }
    public function image() { return $this->belongsTo(Media::class, 'image_id'); }
    public function items() { return $this->hasMany(SectionItem::class)->where('is_active', true)->orderBy('order'); }
}