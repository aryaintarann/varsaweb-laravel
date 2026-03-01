<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->default("Let's Collaborate");
            $table->string('title')->default('Get in Touch');
            $table->text('description');
            $table->string('email')->default('hello@varsaweb.com');
            $table->string('phone')->default('+1 (555) 123-4567');
            $table->string('operating_hours')->nullable();
            $table->string('badge_1')->nullable();
            $table->string('badge_2')->nullable();
            $table->string('badge_3')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};
