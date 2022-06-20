<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOfBenefitCategoriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_of_benefit_categories', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('benefit_category_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('display_price')->nullable();
            $table->string('real_price')->nullable();
            $table->string('price')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('publisher_id')->unsigned();
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
        Schema::drop('service_of_benefit_categories');
    }
}
