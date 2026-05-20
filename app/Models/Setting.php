<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['group', 'key', 'value', 'type', 'label', 'description', 'is_public', 'order'];

    protected function casts(): array
    {
        return ['is_public' => 'boolean'];
    }

    // Static helper to get a setting value
    public static function get(string $key, mixed $default = null): mixed
    {
        $setting = static::where('key', $key)->first();
        if (!$setting) return $default;
        return match($setting->type) {
            'boolean' => (bool) $setting->value,
            'json'    => json_decode($setting->value, true),
            'number'  => (float) $setting->value,
            default   => $setting->value,
        };
    }

    public static function set(string $key, mixed $value): void
    {
        static::updateOrCreate(['key' => $key], ['value' => is_array($value) ? json_encode($value) : $value]);
    }
}