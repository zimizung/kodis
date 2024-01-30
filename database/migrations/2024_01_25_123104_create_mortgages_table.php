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
        Schema::create('mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('kodisno');
            $table->string('plotnumber');
            $table->string('mortgagee');
            $table->string('period');
            $table->decimal('loanamount');
            $table->date('dateregister');
            $table->date('firstinstallment');
            $table->integer('fiche');
            $table->string('accno');
            $table->decimal('allowamt');
            $table->date('workcompl');
            $table->date('stopallowance');
            $table->date('terminateds');
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
        Schema::dropIfExists('mortgages');
    }
};
