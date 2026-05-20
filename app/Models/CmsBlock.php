<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsBlock extends Model
{
    protected $fillable = ['name', 'key', 'type', 'content', 'data', 'description', 'is_active'];
    protected function casts(): array { return ['data' => 'array', 'is_active' => 'boolean']; }

    public static function getValue(string $key, mixed $default = null): mixed
    {
        $block = static::where('key', $key)->where('is_active', true)->first();
        return $block ? $block->content : $default;
    }
}