<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_page_sections', function (Blueprint $table) {

            $table->id();

            $table->string('section_key')->unique();

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('content')->nullable();

            $table->string('image')->nullable();
            $table->string('background_image')->nullable();

            // buttons
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();

            $table->string('secondary_button_text')->nullable();
            $table->string('secondary_button_link')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // dynamic data
            $table->json('extra_data')->nullable();
            $table->json('stats')->nullable();

            // featured links
            $table->json('featured_project_ids')->nullable();
            $table->json('featured_service_ids')->nullable();
            // FIXED
            $table->json('featured_industry_ids')->nullable();

            $table->boolean('status')->default(1);
            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
        

    }

    public function down(): void
    {
        Schema::dropIfExists('home_page_sections');
    }
};