<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index(){
        $this->display();
    }

    public function login()
    {

        // var_dump($_POST);exit;
    	$name = I('post.name');
    	$pwd = I('post.password');
    	$data = M('admin')->where(array('name'=>$name,'pwd'=>$pwd))->select();
       // echo $data->getLastSql();exit;
        // var_dump($data);exit;
    
    	if(!empty($data)){
    		session('AdminName',$name);
    		session('AdminPwd',$pwd);
    		$this->assign('AdminName',session('AdminName'));
    		$this->assign('AdminPwd',session('AdminPwd'));
    		$this->display('Index/index');
    	} else {
    		$this->error('用户名或密码错误');
    	}
    }




}