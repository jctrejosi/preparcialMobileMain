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
        Schema::create('employees_shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();  
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->dateTime('shft_start');
            $table->dateTime('shift_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_shifts');
    }
};
