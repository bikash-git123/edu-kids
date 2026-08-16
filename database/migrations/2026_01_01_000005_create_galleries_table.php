<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // e.g. "Independence Day Celebration"
            $table->date('event_date')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'archived'])->default('active');
            $table->timestamps();
        });

        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_id')->constrained('galleries')->onDelete('cascade');
            $table->string('image_path');
            $table->string('title')->nullable(); // Optional title for individual image
            $table->text('description')->nullable(); // Optional description for individual image
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_images');
        Schema::dropIfExists('galleries');
    }
};
