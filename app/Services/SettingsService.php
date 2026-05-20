<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingsService
{
    private const CACHE_KEY = 'cms_settings';
    private const CACHE_TTL = 3600;

    public function all(): array
    {
        return Cache::remember(self::CACHE_KEY, self::CACHE_TTL, function () {
            return Setting::all()->pluck('value', 'key')->toArray();
        });
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return Setting::get($key, $default);
    }

    public function updateGroup(string $group, array $data): void
    {
        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value, 'group' => $group]);
        }
        Cache::forget(self::CACHE_KEY);
    }

    public function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}