<?php
//助手函数
if (!function_exists('hd_config')) {
    //帮助读取后台配置项数据
    function hd_config($var)
    {
        //dd($var);
        static $cache = [];
        $info = explode('.', $var);
//        dd($info);
        if (!$cache) {
            //清空所有缓存
            //Cache::flush();
            //获取缓存中config_cache数据,如果数据不存在,那么会以第二个参数作为默认值
            $cache = Cache::get('config_cache', function () {
                return \App\Models\Config::pluck('data', 'title');
            });
            //dd($cache);
        }
        //isset($cache[$info[0]][$info[1]])?$cache[$info[0]][$info[1]]:''
        return $cache[$info[0]][$info[1]] ?? '';
    }
}
//当从地址兰进去的时候提示
        //检测是否有该函数
if( !function_exists( 'admin_has_permission' ) ){
    function admin_has_permission( $permission )
    {
        //dd($permission);
        if( is_array( $permission ) ){
            //dd($permission);
            //检测登陆的该用户是否有该权限
            //dd(auth( 'admin' )->user()->hasAnyPermission( $permission ));
            if( !auth( 'admin' )->user()->hasAnyPermission( $permission ) ){
                throw  new \App\Exceptions\PermissionException( '暂无权限' );
            }
        }

        if( is_string( $permission ) ){
            //检测登陆的该用户是否有该权限
            //dd(!auth( 'admin' )->user()->hasPermissionTo( $permission ));
            if( !auth( 'admin' )->user()->hasPermissionTo( $permission ) ){
                throw  new \App\Exceptions\PermissionException( '暂无权限!!!' );
            }
        }

    }
}
