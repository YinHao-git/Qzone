<?php

namespace Home\Event;
use Think\Controller;

class LinkEvent extends Controller
{
	public function index()
	{
		//友情链接
		return $linklist=M('link')->select();
		
	}
	
}