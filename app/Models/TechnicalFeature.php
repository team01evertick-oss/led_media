<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalFeature extends Model
{
    protected $fillable = [

        'solution_id',
        'feature_number',
        'title'
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIP
    |--------------------------------------------------------------------------
    */

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }
}