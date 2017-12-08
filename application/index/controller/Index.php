<?php
namespace app\index\controller;

use think\Config;
use think\Controller;

class Index extends Controller
{
	protected $beforeActionList = [
		'first',#  所有的方法都可见的
		'second' => ['except'=>'test'],#  except 把hello方法除外  表示这些方法不使用前置方法，
		'three'  =>  ['only'=>'test'] ,#  three  只可以被test方法使用 表示只有这些方法使用前置方法。
	];
	public function second(){
		echo 'second<hr>';
	}
	public function three(){
		echo 'three<hr/>';
	}
	#  控制器初始化
	public function _initialize(){
		echo '<h1>控制器初始化</h1>';
		test1();
	}
	public function first(){
		echo 'first<br/>';
	}
    public function index()
    {
		#dump(url('index/index/index','id=5&name=john'));
		#dump(\think\Url::build('@index/index/d'));
		#dump(\think\Url::build('index/blog/read#anchor@blog','id=5'));
		#return xml(['name' => 'john','age' => 20]);  //  返回xml数据
		Config::set('default_return_type','xml');
		return ['name' => 'jogn'];  // default_return_type  修改为xml此时可以直接使用
	}
	// 渲染模版文件的练习
	public function template(){
		#  一 
		$view =new \think\View;
		# return $view->fetch();
		#  渲染内容输出
		return $view->display('<h2>渲染内容输出</h2>');
	}
	public function test(){
		# 获取当前访问的url
		return $this->request->url(true);  #  需要继承控制器
	}
	
}
