<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = 'seo';
    protected $fillable = ['meta_title', 'meta_description', 'meta_keywords', 'og_title', 'og_description', 'og_image_id', 'robots', 'canonical_url', 'schema_markup'];
    protected function casts(): array { return ['schema_markup' => 'array']; }

    public function seoable() { return $this->morphTo(); }
    public function ogImage() { return $this->belongsTo(Media::class, 'og_image_id'); }
}