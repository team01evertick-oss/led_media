<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('why_led_media', function (Blueprint $table) {
            $table->string('industry_name')->nullable()->after('description');
            $table->longText('industry_description')->nullable()->after('industry_name');
        });
    }

    public function down(): void
    {
        Schema::table('why_led_media', function (Blueprint $table) {
            $table->dropColumn(['industry_name', 'industry_description']);
        });
    }
};