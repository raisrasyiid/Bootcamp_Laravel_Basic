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
        Schema::create('student_extra', function (Blueprint $table) {
            $table->unsignedBigInteger('students_id');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('restrict');
            $table->unsignedBigInteger('extra_id');
            $table->foreign('extra_id')->references('id')->on('extras')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_extra');
    }
};
