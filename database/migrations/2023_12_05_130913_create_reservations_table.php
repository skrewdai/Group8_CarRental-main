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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('pickup');
            $table->string('return');
            $table->string('pickdate');
            $table->string('retdate');
            $table->string('fname');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('status')->default('pending'); // or another type that fits your requirements
            $table->unsignedBigInteger('user_id')->nullable(); // or ->default(1); // Provide a default user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
