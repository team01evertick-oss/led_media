<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('tagline')->nullable();
            $table->longText('description')->nullable();
            $table->longText('what_it_is')->nullable();
            $table->json('where_used')->nullable();
            $table->json('benefits')->nullable();
            $table->json('features')->nullable();
            $table->json('faqs')->nullable();
            $table->string('cta_title')->nullable();
            $table->string('hero_eyebrow')->nullable();
            $table->foreignId('featured_image_id')->nullable()->constrained('media')->nullOnDelete();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->enum('status', ['published', 'draft'])->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solutions');
    }
};