<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProposalsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_proposals', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('service_request_id')->unsigned();
            $table->string('price_of_proposal')->nullable();
            $table->bigInteger('status_id')->nullable();
            $table->text('quotation')->nullable();
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
        Schema::drop('service_proposals');
    }
}
