<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('futbolistas', function (Blueprint $table) {
            $table->string('nacionalidad')->after('equipo');
        });
    }

    public function down(): void
    {
        Schema::table('futbolistas', function (Blueprint $table) {
            $table->dropColumn('nacionalidad');
        });
    }
};
