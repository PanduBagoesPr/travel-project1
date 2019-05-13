<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAttributeDepartureTimeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_packages', function (Blueprint $table) {
            $table->time('departure_time')->change();
            // $table->float('departure_time', 20, 8)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_packages', function (Blueprint $table) {
            $table->float('depature_time', 10, 6)->change();
            // $table->time('departure_time')->change();
        });
    }
}
