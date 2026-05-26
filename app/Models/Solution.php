<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'why_led_media', 'image', 'status'
    ];

    public function uses()
    {
        return $this->hasMany(SolutionUse::class);
    }

    public function benefits()
    {
        return $this->hasMany(SolutionBenefit::class);
    }

    public function technicalFeatures()
    {
        return $this->hasMany(TechnicalFeature::class);
    }

    public function faqs()
    {
        return $this->hasMany(SolutionFaq::class);
    }

    public function partners()
    {
        return $this->hasMany(Partner::class);
    }
}