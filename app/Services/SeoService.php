<?php

namespace App\Services;

use App\Models\Seo;
use App\Models\Setting;

class SeoService
{
    public function saveSeo(object $model, array $data): Seo
    {
        return $model->seo()->updateOrCreate(
            ['seoable_id' => $model->id, 'seoable_type' => get_class($model)],
            $data
        );
    }

    public function getDefaults(): array
    {
        return [
            'meta_title'        => Setting::get('seo_default_title', 'LED Media Cambodia'),
            'meta_description'  => Setting::get('seo_default_description', ''),
            'meta_keywords'     => Setting::get('seo_default_keywords', ''),
            'og_title'          => Setting::get('seo_default_title', 'LED Media Cambodia'),
            'og_description'    => Setting::get('seo_default_description', ''),
            'robots'            => 'index,follow',
        ];
    }
}