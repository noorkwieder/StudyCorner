<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_halls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')
            ->constrained('courses')
            ->cascadeOnDelete();
            $table->foreignId('hall_id')
            ->constrained('halls')
            ->cascadeOnDelete();
            $table->date('date');
            $table->integer('start_hour');
            $table->integer('end_hour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_halls');
    }
};
