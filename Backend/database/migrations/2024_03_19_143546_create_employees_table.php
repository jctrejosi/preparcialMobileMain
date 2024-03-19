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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position_id')->unsigned();  
            $table->foreign('position_id')->references('id')->on('positions');
            $table->string('name');
            $table->string('lastname');
            $table->string('card');
            $table->date('start_date');
            $table->date('start_contact_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
