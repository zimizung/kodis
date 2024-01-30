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
        Schema::create('leave_olds', function (Blueprint $table) {
            $table->id();
            $table->string('kodisno');
            $table->text('leavetype');
            $table->text('leavecondition');
            $table->date('leavefrom');
            $table->date('leaveto');
            $table->integer('days');
            $table->text('payment');
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
        Schema::dropIfExists('leave_olds');
    }
};
