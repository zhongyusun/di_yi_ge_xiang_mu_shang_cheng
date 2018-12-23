<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile')->nullable()->comment('用户手机号');
            $table->string('open_id')->default('')->comment('qq 登录 openid');
            $table->string('site',500)->nullable()->comment('详细地址');
            $table->enum('sex',['男','女'])->default('男')->comment('用户手机号');
            $table->unsignedBigInteger('brithday')->default(0)->comment('身份证');
            $table->string('username')->default('')->comment('真实姓名');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn ('mobile');
            $table->dropColumn ('open_id');
            $table->dropColumn ('site');
            $table->dropColumn ('sex');
            $table->dropColumn ('brithday');
            $table->dropColumn ('username');
        });
    }
}
