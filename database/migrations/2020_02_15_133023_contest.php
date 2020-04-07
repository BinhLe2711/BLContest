<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest', function (Blueprint $table) {
            $table->increments('id');
            
            
            $table->longText('question',255);
            $table->integer('de');
            $table->integer('tb');
            $table->integer('kho');
            $table->integer('time');
            $table->integer('idclass');
            $table->integer('idnguoitao');
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
        Schema::dropIfExists('contest');
    }
}
