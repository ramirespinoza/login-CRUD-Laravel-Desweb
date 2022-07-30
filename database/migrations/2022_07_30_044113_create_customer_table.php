<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id("id");
            $table->string("name", 75);
            $table->string("address", 250);
            $table->string("phone_number", 25);
            $table->timestamps();
            $table->integer("category_id")->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id_category')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
