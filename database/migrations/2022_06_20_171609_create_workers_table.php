<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id('id');
            $table->string('number_siren')->nullable();
            $table->string('name')->nullable();
            $table->string('number_tva')->nullable();
            $table->string('owner_number')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('workers');
    }
}
