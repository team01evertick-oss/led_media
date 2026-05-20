<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionItem extends Model
{
    protected $fillable = ['page_section_id', 'title', 'subtitle', 'content', 'button_text', 'button_url', 'image_id', 'meta', 'is_active', 'order'];
    protected function casts(): array { return ['meta' => 'array', 'is_active' => 'boolean']; }

    public function section() { return $this->belongsTo(PageSection::class, 'page_section_id'); }
    public function image() { return $this->belongsTo(Media::class, 'image_id'); }
}