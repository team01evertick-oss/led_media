<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolutionFeature extends Model
{
    protected $fillable = [

        'solution_page_id',
        'type',
        'title',
        'sort_order',
    ];

    public function solution()
    {
        return $this->belongsTo(SolutionPage::class);
    }
}