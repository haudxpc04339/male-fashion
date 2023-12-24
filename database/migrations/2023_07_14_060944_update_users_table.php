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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number');
            $table->string('address');
            $table->unsignedBigInteger('role_id');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    
    }
};
