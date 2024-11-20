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
        Schema::create('schedules_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable(); // Foreign key to a course
            $table->unsignedBigInteger('event_id')->nullable(); // Foreign key to an event
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules_tables');
    }
};
