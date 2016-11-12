<?php
namespace Admin\Controller;
use Think\Controller;
class LayoutController extends Controller 
{

    public function layout()
    {
    	session(null);
    	$this->display('Layout/login');	
    }
}