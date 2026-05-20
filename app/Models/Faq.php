<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'group', 'is_active', 'order'];
    protected function casts(): array { return ['is_active' => 'boolean']; }
}