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
        Schema::table('attenders', function (Blueprint $table) {
            $table->string('name');
            $table->string('last_name');
            $table->string('last_second_name');
            $table->enum('voice', ['soprano', 'alto', 'tenor', 'bajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attenders', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('last_name');
            $table->dropColumn('last_second_name');
            $table->dropColumn('voice');            
        });
    }
};
