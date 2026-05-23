<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolutionPage extends Model
{
    protected $fillable = [

        'page_key',
        'title',
        'description',
        'hero_image',

        'cta_title',

        'button_text',
        'button_link',

        'secondary_button_text',
        'secondary_button_link',

        'status',
    ];

    public function features()
    {
        return $this->hasMany(SolutionFeature::class);
    }

    public function faqs()
    {
        return $this->hasMany(SolutionFaq::class);
    }
}