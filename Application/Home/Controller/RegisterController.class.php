<?php 
	namespace Home\Controller;
	use Think\Controller;

	class RegisterController extends Controller
	{
		public function index()
		{
			$this->display('Register/index');
		}
		 public function add()
	    {
	        $this->assign('title','注册用户');
	        $this->display('Register/index');
	    }

	    //执行添加
	    public function insert()
	    {
	    	// var_dump($_POST);exit;
	        if (empty($_POST)) {
	            $this->redirect('Home/Register/index');
	            exit;
	        }

			$map['phone']=$_POST['phone'];
	        if(M('user')->where($map)->select()){
	        		$this->error('手机号已注册!');
	        	}
	        $nam['username']=$_POST['username'];
			if(M('user')->where($nam)->select()){
					$this->error('用户名已被注册!');
				}
		        
				if(empty($_POST['username'])){
		              $this->error('用户名不能为空!');
				}else if(empty($_POST['pwd'])){
					$this->error('密码不能为空!');
				}else if(empty($_POST['repwd'])){
					$this->error('确认密码不能为空!');
				}else if($_POST['pwd'] !== $_POST['repwd']){
					$this->error('确认密码与设置密码不同!');
				}else if(!preg_match("/^1[3-8][0-9]{9}$/",$_POST['phone'])){
					$this->error('输入正确的手机号!');
				}

	        M('user')->create();
	        M('user')->addtime=date("Y-m-d H:i:s",time());
	        M('user')->photo='__PUBLIC__/home/dis/images/1.png';
			M('user')->level=0;
			M('user')->status=0;

				   //执行添加
	            if(M('user')->add() > 0) {
	            	// $data=M('user')->where($map['phone'])->select();
	            	// dump($data['id']);exit;
	            	// echo M('info')->getLastSql();exit;
		           $this->success('恭喜您,注册成功!', U('Login/index'));
		        } else {
		           $this->error('注册失败....');
		        }

	}
}



