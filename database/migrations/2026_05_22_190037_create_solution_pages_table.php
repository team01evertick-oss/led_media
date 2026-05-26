<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /*
        |--------------------------------------------------------------------------
        | SOLUTIONS TABLE
        |--------------------------------------------------------------------------
        */

        Schema::create('solutions', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->longText('description')->nullable();

            $table->longText('why_led_media')->nullable();

            $table->string('image')->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | SOLUTION USES
        |--------------------------------------------------------------------------
        */

        Schema::create('solution_uses', function (Blueprint $table) {

            $table->id();

            $table->foreignId('solution_id')
                  ->constrained('solutions')
                  ->cascadeOnDelete();

            $table->string('title');

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | SOLUTION BENEFITS
        |--------------------------------------------------------------------------
        */

        Schema::create('solution_benefits', function (Blueprint $table) {

            $table->id();

            $table->foreignId('solution_id')
                  ->constrained('solutions')
                  ->cascadeOnDelete();

            $table->string('title');

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | TECHNICAL FEATURES
        |--------------------------------------------------------------------------
        */

        Schema::create('technical_features', function (Blueprint $table) {

            $table->id();

            $table->foreignId('solution_id')
                  ->constrained('solutions')
                  ->cascadeOnDelete();

            $table->string('feature_number')->nullable();

            $table->string('title');

            $table->timestamps();
        });


        /*
        |--------------------------------------------------------------------------
        | SOLUTION FAQS
        |--------------------------------------------------------------------------
        */

        Schema::create('solution_faqs', function (Blueprint $table) {

            $table->id();

            $table->foreignId('solution_id')
                  ->constrained('solutions')
                  ->cascadeOnDelete();

            $table->string('question');

            $table->text('answer')->nullable();

            $table->timestamps();
        });
     Schema::create('partners', function (Blueprint $table) {

    $table->id();

    $table->foreignId('solution_id')
          ->constrained('solutions')
          ->cascadeOnDelete();

    $table->string('title');

    $table->boolean('status')->default(true);

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*
        |--------------------------------------------------------------------------
        | DROP CHILD TABLES FIRST
        |--------------------------------------------------------------------------
        */

        Schema::dropIfExists('solution_faqs');

        Schema::dropIfExists('technical_features');

        Schema::dropIfExists('solution_benefits');

        Schema::dropIfExists('solution_uses');

        Schema::dropIfExists('solutions');

         Schema::dropIfExists('partners');

    }
};