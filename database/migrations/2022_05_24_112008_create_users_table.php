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
        Schema::create('users', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('provider_name')->nullable()->after('id');
            // $table->string('provider_id')->nullable()->after('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password')->nullable()->change();
            // $table->string('avatar')->nullable();
            // $table->enum('role', ['admin', 'user'])->default('user');
            // $table->rememberToken();
            // $table->timestamps();      
            $table->increments('id');
            $table->string('provider_name')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};