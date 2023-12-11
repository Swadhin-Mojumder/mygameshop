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
        Schema::create('doctorshows', function (Blueprint $table) {
            $table->id();
            $table->string('doctor');
            $table->string('name');
            $table->string('spacialist');
            $table->string('bio_head');
            $table->string('bio_body');
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctorshows');
    }
};
