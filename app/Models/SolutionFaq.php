<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolutionFaq extends Model
{
    protected $fillable = [

        'solution_page_id',
        'question',
        'answer',
    ];

    public function solution()
    {
        return $this->belongsTo(SolutionPage::class);
    }
}