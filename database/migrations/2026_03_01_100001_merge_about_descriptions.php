<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('about_settings', function (Blueprint $table) {
            $table->text('description')->nullable()->after('title');
        });

        \DB::table('about_settings')->get()->each(function ($row) {
            $merged = trim(($row->description_1 ?? '') . "\n\n" . ($row->description_2 ?? ''));
            \DB::table('about_settings')->where('id', $row->id)->update(['description' => $merged]);
        });

        Schema::table('about_settings', function (Blueprint $table) {
            $table->dropColumn(['description_1', 'description_2']);
        });
    }

    public function down(): void
    {
        Schema::table('about_settings', function (Blueprint $table) {
            $table->text('description_1')->nullable()->after('title');
            $table->text('description_2')->nullable()->after('description_1');
            $table->dropColumn('description');
        });
    }
};
