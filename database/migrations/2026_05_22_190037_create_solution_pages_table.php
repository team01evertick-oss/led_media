<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solution_pages', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | ROUTE PAGE
            |--------------------------------------------------------------------------
            */

            $table->string('page_key')->unique();
            // outdoor-billboards
            // indoor-commercial
            // fine-pixel

            /*
            |--------------------------------------------------------------------------
            | HERO
            |--------------------------------------------------------------------------
            */

            $table->string('title');
            $table->text('description')->nullable();

            $table->string('hero_image')->nullable();

            /*
            |--------------------------------------------------------------------------
            | CTA
            |--------------------------------------------------------------------------
            */

            $table->string('cta_title')->nullable();

            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();

            $table->string('secondary_button_text')->nullable();
            $table->string('secondary_button_link')->nullable();

            /*
            |--------------------------------------------------------------------------
            | STATUS
            |--------------------------------------------------------------------------
            */

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solution_pages');
    }
};