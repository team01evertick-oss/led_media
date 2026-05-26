<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolutionUse extends Model
{
    protected $fillable = [

        'solution_id',
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