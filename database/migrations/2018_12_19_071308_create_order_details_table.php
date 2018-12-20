<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('order_id')->index()->comment('订单id');
            $table->string('title')->default('')->comment('商品名称');
            $table->string('list_pic')->default('')->comment('商品图片');
            $table->string('spec')->default('')->comment('商品规格');
            $table->string('sort')->default('')->comment('商品规格');
            $table->unsignedInteger('num')->default(0)->comment('商品数量');
            $table->decimal('price',10,2)->default(0)->comment('商品单价');
            $table->unsignedInteger('good_id')->default(0)->comment('商品id');
            $table->unsignedInteger('spec_id')->default(0)->comment('规格id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('order_details');
    }
}
