<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codepackage', 48);
            $table->string('namepackage', 60);
            $table->string('destination', 60);
            $table->float('price', 20, 6);
            $table->float('depature_time', 10, 6);
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
        Schema::dropIfExists('form_packages');
    }
}
