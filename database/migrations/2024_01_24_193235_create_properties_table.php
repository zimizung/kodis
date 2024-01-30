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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('kodisno');
            $table->string('plotno');
            $table->string('bonds');
            $table->string('addr1');
            $table->string('addr2');
            $table->string('addr3');
            $table->string('pcode');
            $table->datetime('occupationdate');
            $table->datetime('saledate');
            $table->string('otherproperty');
            $table->string('numberowners');
            $table->datetime('datevacated');
            $table->datetime('transferdate');
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
        Schema::dropIfExists('properties');
    }
};
