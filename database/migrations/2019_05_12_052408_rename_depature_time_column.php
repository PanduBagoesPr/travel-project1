<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameDepatureTimeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_packages', function(Blueprint $table) {
            $table->renameColumn('depature_time', 'departure_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_packages', function(Blueprint $table) {
            $table->renameColumn('departure_time', 'depature_time');
        });
    }
}
