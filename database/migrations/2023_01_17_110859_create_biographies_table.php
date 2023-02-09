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
        Schema::create('biographies', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('fathername');
            $table->string('mothername');
            $table->date('dateofbirth');
            $table->string('permanentaddress');
            $table->string('presentaddress');
            $table->string('religion');
            $table->string('hpbby');
            $table->string('topeducation');
            $table->string('gender');
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
        Schema::dropIfExists('biographies');
    }
};
