<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solution_features', function (Blueprint $table) {

            $table->id();

            $table->foreignId('solution_page_id')
                ->constrained()
                ->cascadeOnDelete();

            /*
            |--------------------------------------------------------------------------
            | SECTION TYPE
            |--------------------------------------------------------------------------
            */

            $table->string('type');

            // usage
            // benefits
            // features

            $table->string('title');

            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solution_features');
    }
};