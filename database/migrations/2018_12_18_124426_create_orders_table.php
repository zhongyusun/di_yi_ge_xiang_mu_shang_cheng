<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('number')->comment('订单编号');
            $table->unsignedInteger('price')->default(0)->comment('购买商品总价');
            $table->unsignedInteger('quantity')->comment('购买商品总数');
            $table->unsignedInteger('site_id')->default(0)->comment('地址 id');
            $table->enum('status', [1, 2, 3, 4, 5])->default(1)->comment('订单状态1未支付,2已支付,3待发货,4已发货,5交易已完成');
            $table->unsignedInteger('user_id')->index()->comment('用户id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
