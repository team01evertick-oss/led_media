<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageSection extends Model
{
    protected $fillable = [
        'section_key',
        'title',
        'subtitle',
        'content',
        'image',
        'background_image',
        'button_text',
        'button_link',
        'secondary_button_text',
        'secondary_button_link',
        'featured_project_ids',
        'featured_service_ids',
        'featured_industry_ids',
        'stats',
        'extra_data',
        'meta_title',
        'meta_description',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'extra_data'           => 'array',  // ← enables $about->extra_data['content_2']
        'stats'                => 'array',
        'featured_project_ids' => 'array',
        'featured_service_ids' => 'array',
        'featured_industry_ids'=> 'array',
        'status'               => 'boolean',
    ];
}