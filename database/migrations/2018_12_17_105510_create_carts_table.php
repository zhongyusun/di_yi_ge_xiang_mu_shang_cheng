<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('list_pic')->comment('商品列表图');
            $table->string('title')->comment('商品名称');
            $table->string('spec')->default('')->comment('商品规格');
            $table->string('sort')->default('')->comment('商品分类');
            $table->decimal('price',10,2)->comment('商品价格');
            $table->unsignedInteger('num')->default(0)->comment('购物车数量');
            $table->unsignedInteger('user_id')->index()->comment('用户id');
            $table->unsignedInteger('good_id')->index()->default(0)->comment('商品 id');
            $table->unsignedInteger('spec_id')->index()->default(0)->comment('规格 id');
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
        Schema::dropIfExists('carts');
    }
}
