<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website_name');
            $table->string('website_desc')->nullable();
            $table->string('website_logo')->nullable();
            $table->string('contact_qq')->nullable();
            $table->string('contact_tel')->nullable();
            $table->string('contact_weixin')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('copyright')->nullable();
            $table->string('icp')->nullable();

        });

        Schema::create('friends', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
        });

        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc')->nullable();
            $table->string('url');
            $table->string('img');
            $table->int('category');
            $table->boolean('is_index')->defalut(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('config');
        Schema::drop('friends');
        Schema::drop('cases');
    }
}
