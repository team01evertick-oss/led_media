<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'is_active'];
    protected function casts(): array { return ['is_active' => 'boolean']; }

    public function menus() { return $this->hasMany(Menu::class)->whereNull('parent_id')->orderBy('order'); }
    public function allMenus() { return $this->hasMany(Menu::class)->orderBy('order'); }
}