<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('worker_id')->nullable();
            $table->bigInteger('benefit_category_id')->nullabele();
            $table->bigInteger('service_of_benefit_category_id')->unsigned();
            $table->string('adress')->nullable();
            $table->string('adress_sup')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('city')->nullable();
            $table->string('town')->nullable();
            $table->string('date')->nullable();
            $table->text('task_description')->nullable();
            $table->string('price_by_hour')->nullable();
            $table->bigInteger('status_id')->unsigned();
            $table->string('fix_price')->nullable();
            $table->string('price_after_nego')->nullable();
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
        Schema::drop('service_requests');
    }
}
