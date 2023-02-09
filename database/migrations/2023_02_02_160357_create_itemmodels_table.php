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
        Schema::create('itemmodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_no');
            $table->unsignedBigInteger('item_type_id');
            $table->foreign('item_type_id')->on('item_types')->references('id')->onDelete('Cascade');
            $table->integer('user_id')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('itemmodels');
    }
};
