<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solution_faqs', function (Blueprint $table) {

            $table->id();

            $table->foreignId('solution_page_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('question');

            $table->text('answer')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solution_faqs');
    }
};