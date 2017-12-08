<?php 
namespace app\index\controller;

use think\Controller;

class City extends Controller{
	//  空操作
	#  空操作是指系统在找不到指定的操作方法的时候，会定位到空操作（_empty）方法来执行，利用这个机制，
	#  我们可以实现错误页面和一些URL的优化。
	#  利用空操作来进行城市的切换
	public function _empty($cityNmae){
		return $this->showCityNmae($cityNmae);
	}
	//  显示城市的名字
	protected function showCityNmae($cityNmae){
		return '当前城市为：'.$cityNmae;
	}
}