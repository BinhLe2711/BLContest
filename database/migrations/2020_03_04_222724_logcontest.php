<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Logcontest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logcontest', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idClass');
            $table->integer('idNguoiLam');
            $table->integer('idContest');
            $table->integer('soCau');
            $table->integer('Dung');
            $table->integer('lam');
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
        Schema::dropIfExists('logcontest');
    }
}
