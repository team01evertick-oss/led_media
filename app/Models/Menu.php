<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['menu_group_id', 'parent_id', 'label', 'url', 'route', 'target', 'icon', 'is_active', 'order'];
    protected function casts(): array { return ['is_active' => 'boolean']; }

    public function group() { return $this->belongsTo(MenuGroup::class, 'menu_group_id'); }
    public function parent() { return $this->belongsTo(Menu::class, 'parent_id'); }
    public function children() { return $this->hasMany(Menu::class, 'parent_id')->orderBy('order'); }

    public function getHrefAttribute(): string
    {
        if ($this->route) {
            try { return route($this->route); } catch (\Exception $e) {}
        }
        return $this->url ?? '#';
    }
}