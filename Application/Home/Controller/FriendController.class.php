<?php 
	namespace Home\Controller;
	use Think\Controller;

    class FriendController extends Controller
    {
    	public function index()
    	{   
    		$phone=session('phone');
			if(empty($phone)){
              $this->error('请登录',U('Login/index'));
            }
            // $this->assign('title','我的好友');
		    $mp =session('phone');
            $mdata = M('user')->where("phone={$mp}")->select();
            $mid = $mdata[0]['id'];
            $ar['mid'] = $mid;
            $ar['status'] = 1;
        //查询好友表
        $data = M('flist')->where($ar)->select();
        // var_dump($data);exit;
        // $reply=M('')->where("uid=$id and status=1")->select();
        // $info = M('Notice')->where('status=1')->select();
        // $this->assign('info',$info);
         foreach ($data as $key => $val) {
            //把好友Id合并为一个数组
            $arr[] = $val[fid];
            //把数组拼接为一个字符串
            $id = implode(",", $arr);
            //通过好友id查询好友信息
            $fdata = M('user')->select("$id");
         }
         // var_dump($fdata);exit;
        $this->assign('data',$fdata);
/******************************************************************************************/
        //显示添加好友信息
        //查询申请表
        $add=M('apply')->where($mid)->select();
        $array['mid'] = $add[0]['mid'];
        $array['status'] = 0;
        // var_dump($array);exit;
        $da = M('apply')->where($array)->select();
        $fid = $da[0]['mid'];
        // var_dump($fid);exit;
        if (!empty($fid)) {
        //查询申请人的信息
            $li = M('user')->where("id={$fid}")->select();
            $this->assign('li',$li);
        }

        //分配数据
        $this->assign('list',$fdata);

        /***显示链接**/
        $links = M('link')->select();
        $this->assign('link',$links);


        //添加主题
        $theme = M('theme')->select();
        $this->assign('theme',$theme);

        $this->display();
    }
    	public function add()
    	{
    		 //查询我的ID
        $mp =session('phone');
        $mdata = M('user')->where("phone={$mp}")->select();
        $mid = $mdata[0]['id'];
        //查询好友ID
        $fp = I("post.phone");
        //判断账号
         if (empty($fp)) {
            $this->error('请输入正确的账号');
        }
        $fdata = M('user')->where("phone={$fp}")->select();
        $fid = $fdata[0]['id'];
        //判断账号是否存在
        if (empty($fid)) {
            $this->error('用户不存在');
            return;
        }
        $apply = M("apply");
        //  然后直接给数据对象赋值
        $apply->fid = $fid;
        $apply->mid = $mid;
        $apply->addtime=date('Y-m-d H:i:s',time());
        //  把数据对象添加到数据库
        if ($apply->add() > 0) {
           $this->success('已发送请求',U('Friend/index'));
        } else {
            $this->error('请求发送失败');
        }
    }

    //删除好友
     public function del()
	    {
	        //接收要删除的ID
	        $id=$_GET['id'];
	        //执行删除
	        $dl= M('flist')->where("fid={$id}")->delete();
	        //返回$dl
	        $this->ajaxReturn($dl);
	    }

	//同意好友
    public function yes()
    {
        //查询我的和好友的ID
        $fid = $_GET['id'];
        // var_dump($fid);exit;
        $mp =session('phone');
        $mdata = M('user')->where("phone={$mp}")->select();
        $mid = $mdata[0]['id'];
        // var_dump($mid);exit;
        //修改请求表的状态
        $stu['status'] = 1;
        // var_dump(M('apply')->save($stu));exit;
        // M('apply')->where("mid={$mid}")->save($stu);

        //给字段赋值
        $friend = M("flist");
        $friend->fid = $fid;
        $friend->mid = $mid;
        $friend->status=$stu['status'];
        $friend->addtime=date('Y:m:d H:i:s',time());
        //插入到好友表
        if ($friend->add() > 0) {
            $friend = M("flist");
            $friend->mid = $mid;
            $friend->fid = $fid;
            $friend->status=$stu['status'];
            $friend->addtime=date('Y:m:d H:i:s',time());
            // var_dump();exit;
            // $friend->add();
            $this->success('添加成功',U('Friend/index'));
        }else{
            $this->error('添加失败');
        }

    }

    //拒绝好友
    public function no()
    {
        //查询我的ID
        $mp =session('phone');
        $mdata = M('user')->where("phone={$mp}")->select();
        $mid = $mdata[0]['id'];

        //修改请求表的状态
        $stu['status'] = 2;
        if(M('flist')->where("mid={$mid}")->save($stu) >0 ){
            $this->success('已拒绝',U('Friend/index'));
        }else{
            $this->error('拒绝失败');
        }

    }

    public function _empty($name)
    {
        // echo '<h1>404</h1>';
        $this->display('Empty/404');
    }

}

	?>