<?php 
	namespace Home\Controller;
	use Think\Controller;

	class LeaveController extends Controller
	{
		 public function index()
		    {
		    	$phone=session('phone');
					if(empty($phone)){
		              $this->error('请登录',U('Login/index'));
		            }else{
					// $this->display('Leave/index');
					}

			    $data = M('message')->order('id desc')->select();
		        $this->assign('data',$data);
		        $this->display();
		    }
		    //在线留言
		    public function Message()
		    {  
		        $leave= M('message');
		        $info = I('post.message');
		        if(empty($info)){
		            $this->error('内容不能为空');
		        }
		        $username=session('username');
		        $id = session('id');
		        $data['uid']=$username;
		        $data['content'] = $info;
		        $data['time'] = date("Y-m-d H:i:s",time());
		        $str = $leave->add($data);
		        if($str>0){
		            $this->success('发送成功');
		        }else{
		            $this->error('发送失败');
		        }
		    }

		    //删除留言
		    public function del()
		    {
		        $id = I('get.id/d');
		    	if (empty($id)) {
		            $this->redirect('Home/Leave/index');
		            exit;
		        }
		        
		    	if (M('message')->delete($id) > 0) {
		           $this->success('恭喜您,删除成功!', U('index'));
		        } else {
		           $this->error('删除失败....', U('index'));
		        }
		    }

		    //回复留言
		     public function reply()
			    {
			        $reply=M('message_reply');
			        $id = I('get.id');
			        $data['status']=2;
			        $reply->where("id=$id")->save($data);
			        $this->redirect('index');
			    }
			    //404
			     public function _empty($name)
			    {
			        // echo '<h1>404</h1>';
			        $this->display('Empty/404');
			    }
	}




