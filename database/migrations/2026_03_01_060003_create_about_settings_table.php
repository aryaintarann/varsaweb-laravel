<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('About Us');
            $table->text('description_1');
            $table->text('description_2')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_settings');
    }
};
