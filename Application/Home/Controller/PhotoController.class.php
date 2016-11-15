<?php
namespace Home\Controller;
use Think\Controller;

class PhotoController extends Controller
{
	public function index()
	{
		//友情链接
		$linklist=M('link')->select();
		// dump($linklist);
		$this->assign('linklist',$linklist);
		$this->display('Photo/index');
	}
}