<?php 
namespace Home\Controller;

use Think\Controller;

class HomepageController extends Controller
{
	public function index()
	{
		$this->display('Homepage/index');
	}
}