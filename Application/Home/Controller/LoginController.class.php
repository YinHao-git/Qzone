<?php 
	namespace Home\Controller;
	use Think\Controller;

	class LoginController extends Controller
	{
		public function index()
		{
			$llinklist=M('llink')->select();
			// dump($llinklist);exit;
			$this->assign('llinklist',$llinklist);
			$this->display('Login/index');
		}

		public function  login()
		{
				$map['phone']=I('post.phone');
				$map['pwd']=I('post.pwd');
				$data=M('user')->where($map)->select();
        		$id = $data[0]['id'];

        		$phone=$data[0]['phone'];
        		$username=$data[0]['username'];
        		// var_dump($data);exit;
				if (empty($_POST)) {
			        $this->redirect('Home/Login/index');
			        exit;
			    }
				if(empty($_POST['phone'])){
		              $this->error('手机号不能为空!');
				}else if(empty($_POST['pwd'])){
					$this->error('密码不能为空!');
				}

				 //执行登录
	            if($data) {
	               session('phone',$phone);
	               session('id',$id);
	               session('username',"$username");
	               
		           $this->success('登录成功!', U('Homepage/index'));
		        } else {
		           $this->error('用户名或密码错误....');
		        }
	   }
   }




