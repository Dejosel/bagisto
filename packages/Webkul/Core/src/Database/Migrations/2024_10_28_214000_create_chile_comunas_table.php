<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chile_comunas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id')->nullable()->unsigned();
            $table->string('region_code')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();

            $table->foreign('region_id')->references('id')->on('country_states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chile_comunas');
    }
};
