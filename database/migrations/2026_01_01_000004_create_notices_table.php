<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->enum('target_audience', ['All', 'Students', 'Teachers', 'Staff'])->default('All');
            $table->enum('priority', ['Normal', 'High', 'Urgent'])->default('Normal');
            $table->enum('status', ['published', 'draft', 'archived'])->default('published');
            $table->date('posted_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
