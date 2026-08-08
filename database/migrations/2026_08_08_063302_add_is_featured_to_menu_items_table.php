<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('menu_items', function (Blueprint $blueprint) {
            $blueprint->boolean('is_featured')->default(false)->after('image_url');
        });
    }

    public function down(): void
    {
        Schema::table('menu_items', function (Blueprint $blueprint) {
            $blueprint->dropColumn('is_featured');
        });
    }
};
