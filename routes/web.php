<?php

////网站首页
//Route::get('/','Home\HomeController@index')->name('home');


//后台需要验证的路由
Route::group(['middleware'=>['admin.auth'],'prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function (){
    //后台首页
    Route::get('/','AdminController@index')->name('index');
    //退出
    Route::get('/logout','LoginController@logout')->name('logout');
});
//后台不需要验证的路由
Route::group(['prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function (){
    //后台登录页
    Route::get('/login','LoginController@login')->name('login');
    //后台处理登录数据
    Route::post('/loginpost','LoginController@loginpost')->name('loginpost');
});
