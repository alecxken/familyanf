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
        Schema::create('tribute_people', function (Blueprint $table) {
            $table->id();
            $table->string('token')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('profile')->nullable();
            $table->text('message')->nullable();
            $table->string('photos')->nullable();
            $table->string('yob')->nullable();
            $table->string('yod')->nullable();
            $table->string('dob')->nullable();
            $table->string('dod')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tribute_people');
    }
};
