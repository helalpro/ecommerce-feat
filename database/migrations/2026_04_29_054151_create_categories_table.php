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
        Schema::create('categories', function (Blueprint $table) {
      $table->id();
      $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnUpdate();
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->string('image')->nullable();
      $table->boolean('is_featured')->default(false);
      $table->boolean('is_active')->default(true)->comment('0: disabled, 1: active');
      $table->string('is_menu')->nullable();
      $table->integer('sort_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
