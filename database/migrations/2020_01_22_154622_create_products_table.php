<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serialnumber')->unique();
            $table->string('type');
            $table->string('trademark');
            $table->string('so')->nullable();
            $table->string('model');
            $table->string('status');
            $table->integer('ram')->nullable();
            $table->string('dataram')->nullable();
            $table->integer('hdd')->nullable();
            $table->string('datahdd')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('products');
    }
}