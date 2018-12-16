<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->comment('用户名称');
            $table->string('email')->unique()->comment('用户邮箱');
            $table->string('icon')->default('')->comment('用户头像');
            $table->unsignedTinyInteger('membership')->default(0)->comment('会员级别');
            $table->timestamp('email_verified_at')->nullable()->comment('注册时间');
            $table->string('password')->comment('密码');
            $table->rememberToken()->comment('七天登录');
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
        Schema::dropIfExists('users');
    }
}
