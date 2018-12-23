<?php

////网站首页
Route::get('/', 'Home\HomeController@index');

Route::group(['prefix' => 'home', 'namespace' => 'Home', 'as' => 'home.'], function () {
    //首页
    Route::get('/', 'HomeController@index')->name('home');
    //二级菜单分类
    Route::get('/list/{list}', 'ListController@index')->name('list');
    //商品具体分类
    Route::get('/contentlist/{list}', 'ListController@contentlist')->name('content.list');
    //商品详情
    Route::get('/content/{content}', 'ContentController@index')->name('content');
    //根据规格请求对应的库存
    Route::post('/spec_to_get_total', 'ContentController@specGetTotal')->name('spec_to_get_total');
    //购物车
    Route::resource('cart', 'CartController');
    //搜索
    Route::get('search','HomeController@search')->name('search');
    //结算页
    Route::resource('order', 'OrderController');
    //支付页
    Route::get('index', 'PayController@index')->name('index');
    //微信支付回调
    Route::any('notify','PayController@notify')->name('notify');
    //检测是否已经支付订单
    Route::post('checkOrderStatus','PayController@checkOrderStatus')->name('checkOrderStatus');
    //收货地址
    Route::resource('site', 'SiteController');
    //注册页
    Route::get('/register', 'UserController@register')->name('register');
    //用户注册数据
    Route::post('/registerpost', 'UserController@registerpost')->name('registerpost');
    //登录页
    Route::get('/login', 'UserController@login')->name('login');
    //扣扣回掉登录
    Route::get('qqback','HomeController@qqback')->name('qqback');
    //登录数据
    Route::post('/loginpost', 'UserController@loginPost')->name('loginpost');
    //注销登录
    Route::get('/loginout', 'UserController@logout')->name('loginout');

    //忘记密码
    Route::get('/changepassword', 'UserController@changepassword')->name('changepassword');
    Route::post('/passwordstore', 'UserController@passwordstore')->name('passwordstore');
    //重置密码
    Route::get('/restpassword/{token}', 'UserController@restpasswordview')->name('restpassword');
    Route::post('/restpassword/{token}', 'UserController@restpassword')->name('restpassword_token');
    //个人中心
    Route::get('/personal/{personal}', 'PersonalcenterController@index')->name('personal');
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
    //轮播图
    Route::resource('flash', 'FlashController');
    //订单管理
    Route::resource('order','OrderController');
    // 管理员
    Route::resource('admin','IndexController');
    //清理缓存
    Route::get('forgetPermissionCache','PermissionController@forgetPermissionCache')->name('forgetPermissionCache');
    //权限
    Route::get('permission','PermissionController@index')->name('permission');
    //角色
    Route::resource('role','RoleController');
    //给角色设置权限
    Route::post('setRolePermission/{role}','RoleController@setRolePermission')->name('setRolePermission');
    //给用户设置角色
    Route::post('adminSetRoleStore/{admin}','IndexController@adminSetRoleStore')->name('adminSetRoleStore');
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


