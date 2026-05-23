<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
         'category',  
        'thumbnail',
        'banner',
        'short_description',
        'description',
        'is_featured',
        'status',
    ];

    /*
    |----------------------------------------------------
    | SCOPES (useful for filtering)
    |----------------------------------------------------
    */

    // Only active projects
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    // Only featured projects (home page)
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }

    /*
    |----------------------------------------------------
    | ROUTE MODEL BINDING (SEO SLUG URL)
    |----------------------------------------------------
    */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}