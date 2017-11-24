<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('keywords');
            $table->text('ga_script');
            $table->text('description');
            $table->text('logo');
            $table->text('site_name');
            $table->text('title');
            $table->text('subtitle');
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
        Schema::dropIfExists('index_datas');
    }
}
