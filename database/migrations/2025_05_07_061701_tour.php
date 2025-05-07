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
        Schema::create('tour', function (Blueprint $table) {
            $table->id();
            $table->string('image',500)->nullable(false);
            $table->string('title',500)->nullable(false);
            $table->string('slug')->unique();
            $table->longtext('content')->nullable(false)->default(null);
            // $table->string('tour_date')->nullable(false)->default(null);
            $table->enum('tour_status',["live","disabled"])->nullable(false)->default("disabled");
            $table->integer('tour_sorting')->nullable(false)->default("1")->index("tour_index");
            $table->tinyInteger('status')->default('1')->nullable(false);
            $table->bigInteger("created_by")->nullable(true);
            $table->bigInteger("updated_by")->nullable(true);
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->longText('meta_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour');
    }
};
