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
        Schema::create('assetitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('itemname');
            $table->string('code');
            $table->string('itemdescription');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->on('brands')->references('id')->onDelete('Cascade');
            $table->unsignedBigInteger('itemmodel_id');
            $table->foreign('itemmodel_id')->on('itemmodels')->references('id')->onDelete('Cascade');
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
        Schema::dropIfExists('assetitems');
    }
};
