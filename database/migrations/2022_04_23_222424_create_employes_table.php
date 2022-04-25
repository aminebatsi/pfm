<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('Emp_Nss');
            $table->string('Emp_Nom');
            $table->string('Emp_Pm');
            $table->string('Emp_Tarif');
            //$table->foreign('Emp_Tarif')->references('tar_Description')->on('tarifs')
            //->onDelete('cascade')
            //->onUpdate('cascade');
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
        Schema::dropIfExists('employes');
    }
}
