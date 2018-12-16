<?php

////网站首页
Route::get('/', 'Home\HomeController@index');

Route::group(['prefix' => 'home', 'namespace' => 'Home', 'as' => 'home.'], function () {
    //首页
    Route::get('/', 'HomeController@index')->name('home');
    //list
    Route::get('/list/{list}','ListController@index')->name('list');
    //商品详情
    Route::get('/content/{content}','ContentController@index')->name('content');
    //注册页
    Route::get('/register', 'UserController@register')->name('register');
    //用户注册数据
    Route::post('/registerpost', 'UserController@registerpost')->name('registerpost');
    //登录页
    Route::get('/login', 'UserController@login')->name('login');
    //登录数据
    Route::post('/loginpost', 'UserController@loginPost')->name('loginpost');
    //注销登录
    Route::get('/loginout', 'UserController@logout')->name('loginout');
    //密码重置页面
    Route::get('/passwordreplace', 'UserController@passwordreplace')->name('passwordreplace');
    //密码数据
    Route::post('/passwordpost', 'UserController@passwordpost')->name('passwordpost');
    //
});

//后台需要验证的路由
Route::group(['middleware' => ['admin.auth'], 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    //后台首页
    Route::get('/', 'AdminController@index')->name('index');
    //退出
    Route::get('/logout', 'LoginController@logout')->name('logout');
    // 分类管理资源路由
    Route::resource('category', 'CategryController');
    //商品管理资源路由
    Route::resource('good', 'GoodController');
    //配置项管理
    Route::resource('config', 'ConfigController');
});
//后台不需要验证的路由
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    //后台登录页
    Route::get('/login', 'LoginController@login')->name('login');
    //后台处理登录数据
    Route::post('/loginpost', 'LoginController@loginpost')->name('loginpost');

});


//工具类
Route::group(['prefix' => 'util', 'namespace' => 'Util', 'as' => 'util.'], function () {
    //上传类
    Route::any('/upload', 'UploadController@upload')->name('upload');
    //验证码
    Route::any('/code/send', 'CodeController@send')->name('code.send');
});


