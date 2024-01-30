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
        Schema::create('mortgage_deductions', function (Blueprint $table) {
            $table->id();
            $table->string('kodisno');
            $table->string('reason');
            $table->date('leavefrom');
            $table->date('leaveto');
            $table->decimal('comppayment');
            $table->decimal('subsidy');
            $table->decimal('volpayment');
            $table->decimal('volsubsidy');
            $table->decimal('totsubsidy');
            $table->decimal('totpayment');
            $table->decimal('insurance');
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
        Schema::dropIfExists('mortgage_deductions');
    }
};
