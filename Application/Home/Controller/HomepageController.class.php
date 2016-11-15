<?php 
namespace Home\Controller;

use Think\Controller;

class HomepageController extends Controller
{
	public function index()
	{
		//友情链接
		$linklist=M('link')->select();
		// dump($linklist);
		$this->assign('linklist',$linklist);
		$this->display('Homepage/index');
	}


	public function out()
	{
		session(null);
		$this->redirect('Home/Login/index');
	}
}