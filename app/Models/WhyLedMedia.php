<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyLedMedia extends Model
{
    use HasFactory;

    /**
     * Table Name
     */
    protected $table = 'why_led_media';

    /**
     * Mass Assignment
     */
    protected $fillable = [
        'page',
        'title',
        'description',
    ];
}