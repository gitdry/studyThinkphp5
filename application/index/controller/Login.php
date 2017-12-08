<?php 
namespace app\index\controller;

/**
*   登录控制器  
*/
use think\Controller;

class Login extends Controller
{
	public function index(){
		echo TRAIT_PATH;   // 打印出 traits 目录所在位置。

		return view('');  // 
	}
	//  登录检测
	public function check(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if ($username == 'user' && $password == 123) {
			echo $_SERVER["HTTP_REFERER"];
			$this->success('登录成功');
		}else{
			echo $_SERVER["HTTP_REFERER"];  // 打印出跳转前的地址
			//  失败默认的跳转地址为： javascript:history.back(-1);
			$this->error('登录失败');
		}
	}
}
