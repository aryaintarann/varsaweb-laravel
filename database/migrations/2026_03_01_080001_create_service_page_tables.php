<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->default('Digital Service Studio');
            $table->string('title')->default('Our Services');
            $table->text('description');
            $table->string('tag_1')->nullable();
            $table->string('tag_2')->nullable();
            $table->string('tag_3')->nullable();
            $table->string('stat_1_label')->nullable();
            $table->string('stat_1_value')->nullable();
            $table->string('stat_2_label')->nullable();
            $table->string('stat_2_value')->nullable();
            $table->text('approach_text')->nullable();
            $table->timestamps();
        });

        Schema::create('work_processes', function (Blueprint $table) {
            $table->id();
            $table->string('step_label');
            $table->string('title');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('work_processes');
        Schema::dropIfExists('service_page_settings');
    }
};
