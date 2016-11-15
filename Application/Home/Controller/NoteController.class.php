<?php 
	namespace Home\Controller;
	use Think\Controller;

	class NoteController extends Controller
	{
		public function index()
		{
			$phone=session('phone');
			if(empty($phone)){
              $this->error('请登录',U('Login/index'));
            }
			$data = M('talk')->order('id desc')->select();
		    $this->assign('data',$data);
		    $this->display();
		}

		// 添加说说
		public function insert()
		{
		//判断是否传的值为空
			// var_dump($_POST);exit;
			 $talk= M('talk');
		     $info = I('post.content');
		     if(empty($info)){
		            $this->error('内容不能为空');
		        }
		        $id = session('id');
		        $username=session('username');
		        // var_dump($username);exit;
		        $data['username']=$username;
		        $data['content'] = $info;
		        $data['time'] = date("Y-m-d H:i:s",time());
		        $str = $talk->add($data);
		        if($str>0){
		            $this->success('发送成功');
		        }else{
		            $this->error('发送失败');
		        }
		}
		// 显示说说
		 public function show()
		    {
		        // $id = session('id');
		        // if(empty($id)){
		        //     $this->error('请登录',U('Login/index'));
		        // }
		        $Note = M('talk');
		        //查user表拿到用户头像和用户名 查说说表拿说说详情
		        $data = $Note ->field('u.username,u.photo,t.*')->table('qzone_user u,qzone_talk t')->where("u.id={$id} and t.uid={$id}")->order('addtime desc')->select();
		        // var_dump($data);die;
		        $length=count($data);
		        for ($i=0; $i <$length ; $i++) {
		            $where = 'c.uid=u.id and c.status=1 and c.pid='.$data[$i]['id'];
		            // var_dump($where);die;
		            // dump($data[$i]['id']);die;
		            $list[$data[$i]['id']] = M('talk_commect')->field('t.*,u.username')->table('qzone_user u,qzone_talk_commect t')->where($where)->order('taddtime desc')->select();
		        }
		        $this->assign('title','我的说说');
		        $this->assign('data',$data);
		        // $this->assign('list',$list);
		        $this->display();
		    }

		  // 删除说说
		 public function del()
		    {
		        if (empty(I('get.id/d'))) {
		            $this->redirect('Home/Note/index');
		            exit;
		        }

		        if (M('talk')->delete(I('get.id/d')) > 0) {
		            $this->success('删除成功!','index');
		        } else {
		            $this->error('删除失败!');
		        }
		    }
	}




