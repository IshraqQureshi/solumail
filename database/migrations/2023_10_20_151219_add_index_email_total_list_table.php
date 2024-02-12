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
        Schema::table('email_total_list', function (Blueprint $table) {
            $table->index('id');
            $table->index('userID');
            $table->index('file_uploads_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('email_total_list', function (Blueprint $table) {
            //
        });
    }
};
