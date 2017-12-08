<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//  定义路由的格式：
//  Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）');
use think\Route;
//  参数使用 ： 来分割
#Route::rule('/:name','index/index/index');
Route::rule('/','index/index/index');
//  多个参数
/*
	Route::rule('index/:id/:name',function (){
	return 'callback';
});
*/
return [
//  变量规则的定义
    '__pattern__' => [  //  路由的变量规则  同理：Route::pattern('name','\w+');
        'name' => '\w+',//  变量只能是数字
		'id' => '\d+'
    ],
//  定义了一条路由  并定义了两个参数 id 的变量规则只能是数字  请求方法：get 地址：index/hello
    '[hello]'     => 
	[
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
	'__miss__' => 'index/test',
	'template' => 'index/index/template',
	'test' => ['index/index/test','get'],
	'login' => 'index/login/index',  #  登录显示
	'check' => 'index/login/check',  #  登录检测
	//'city/:cityNmae' => 'index/city',
	'test' => 'test/req'
];

