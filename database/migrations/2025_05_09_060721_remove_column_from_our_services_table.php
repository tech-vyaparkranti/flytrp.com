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
        Schema::table('our_services', function (Blueprint $table) {
            $table->dropColumn('banner_image');
            $table->dropColumn('short_desc');
            $table->dropColumn('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_services', function (Blueprint $table) {
            $table->string('category');
            $table->longText('banner_image');
            $table->longText('short_desc');
        });
    }
};
