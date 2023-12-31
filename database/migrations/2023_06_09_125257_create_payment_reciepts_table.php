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
        Schema::create('payment_reciepts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete();    
            $table->boolean('is_processed');
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
        Schema::dropIfExists('payment_reciepts');
    }
};
