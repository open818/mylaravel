<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc')->nullable();
        });

        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->comment('模块分类ID');
            $table->string('name');
            $table->string('desc')->nullable()->comment('模块描述');
            $table->string('img')->nullable()->comment('模块效果图');
            $table->string('url')->nullable()->comment('模块预览');
        });

        Schema::create('module_attr', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->comment('模块ID');
            $table->string('name');
            $table->string('desc')->nullable()->comment('属性描述');
            $table->string('type')->default("string")->comment('属性值类型');
            $table->integer('sort')->default(1)->comment('属性排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
        Schema::drop('modules');
        Schema::drop('module_attr');
    }
}
