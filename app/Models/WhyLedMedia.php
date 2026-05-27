<?php
// app/Models/WhyLedMedia.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyLedMedia extends Model
{
    protected $table = 'why_led_media';

    protected $fillable = [
        'page',
        'title',
        'description',
        'industry_name',
        'industry_description',
    ];

    public static function forPage(string $pageSlug): self
    {
        $record = static::where('page', $pageSlug)->first();

        if ($record) {
            return $record;
        }

        // Return a new unsaved instance with default values
        $instance                       = new static();
        $instance->page                 = $pageSlug;
        $instance->title                = '';
        $instance->description          = '';
        $instance->industry_name        = null;
        $instance->industry_description = null;

        return $instance;
    }
}