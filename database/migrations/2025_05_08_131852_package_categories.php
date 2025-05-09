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
        if (!Schema::hasTable('package_categories')) {
            Schema::create("package_categories",function (Blueprint $table)
            {
                $table->id();
                $table->string("category_name");
                $table->string("package_id");
                $table->integer("position");
                $table->tinyInteger("status")->default(1);
                $table->string("created_by")->nullable();
                $table->string("updated_by")->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_categories');
    }
};
