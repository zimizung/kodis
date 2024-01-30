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
        Schema::create('pensions', function (Blueprint $table) {
            $table->id();
            $table->string('kodisno');
            $table->string('pfund');
            $table->string('pensno');
            $table->date('admtofund');
            $table->date('admservcounts');
            $table->date('pensexit');
            $table->decimal('salary');
            $table->string('noncontr');
            $table->string('reason');
            $table->string('remarkes');
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
        Schema::dropIfExists('pensions');
    }
};
