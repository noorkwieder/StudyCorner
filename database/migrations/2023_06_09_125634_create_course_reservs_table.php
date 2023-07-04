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
        Schema::create('course_reservs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')
            ->constrained('courses')
            ->cascadeOnDelete();
            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->boolean('is_paid');
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
        Schema::dropIfExists('course_reservs');
    }
};
