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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('national_id')->nullable();
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('type')->nullable();
            $table->string('picture')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('emergency')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('medical_degree')->nullable();
            $table->string('specialist')->nullable();
            $table->string('biography')->nullable();
            $table->text('full_biography')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('blood_group')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
