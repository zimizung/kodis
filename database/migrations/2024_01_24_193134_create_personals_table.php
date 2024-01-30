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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('persalno');
            $table->string('kodisno');
            $table->string('surname');
            $table->string('firstname');
            $table->string('initials');
            $table->string('idno');
            $table->date('dddd');
            $table->date('dob');
            $table->date('weddate');
            $table->string('gender');
            $table->string('maritalstatus');
            $table->string('language');
            $table->integer('incrementmm');
            $table->date('lastupd');
            $table->date('appointment');
            $table->decimal('maxsal');
            $table->integer('wangedrag');
            $table->integer('promotion');
            $table->datetime('time');
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
        Schema::dropIfExists('personals');
    }
};
