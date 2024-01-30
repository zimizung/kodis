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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('kodisno');
            $table->string('compno');
            $table->integer('post');
            $table->date('datefrom');
            $table->date('dateto');
            $table->string('descr');
            $table->string('category');
            $table->string('rg');
            $table->string('salary');
            $table->string('hours');
            $table->string('out');
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
        Schema::dropIfExists('histories');
    }
};
