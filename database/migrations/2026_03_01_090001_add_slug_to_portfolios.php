<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title');
            $table->text('short_description')->after('slug');
            $table->text('description')->change();
        });

        \DB::table('portfolios')->get()->each(function ($portfolio) {
            \DB::table('portfolios')->where('id', $portfolio->id)->update([
                'slug' => \Illuminate\Support\Str::slug($portfolio->title),
                'short_description' => $portfolio->description,
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn(['slug', 'short_description']);
        });
    }
};
