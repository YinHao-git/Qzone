<?php
namespace Home\Controller;
use Think\Controller;

class MessageController extends Controller
{
    public $uid;
    public function index()
    {
    	//通过好友的id查询他的留言表
    	//获取id
        $id=session('id');
        $phone = session('phone');
        if(empty($phone)){
            $this->error('请登录',U('Login/index'));
        }
        $uid = $_GET['id'];
        $theme = M('theme')->select();
    	//查询表
    	$list = M('message')->field('m.*,u.photo,u.username')->table('qzone_user u,qzone_message m')->where("m.mid=u.id and m.uid={$uid}")->order('id desc')->select();
        var_dump($list);exit;
        $reply=M('Reply')->where("uid=$id and status=1")->select();
        $info = M('Notice')->where('status=1')->select();
        $links = M('links')->select();
        $this->assign('links',$links);
        $this->assign('info',$info);
        $this->assign('reply',$reply);
    	$this->assign('list',$list);
        $this->assign('uid',$uid);
        $this->assign('theme',$theme);
    	$this->assign('title','QQ空间');
        $this->display('Leave/index');

    }

    public function add(){
    	//通过session查询留言用户的id
    	$phone =session('phone');
    	$datas =M('user')->where("phone={$phone}")->select();
    	$mid = $datas[0]['id'];
        //接受被留言用户的id
        $uid = I('post.id');
        var_dump($uid);exit;
        //接收内容
    	$content = $_POST['content'];
    	//把数据写入表
    	$mess = M('message');
    	$data['mid'] = $mid;
    	$data['content'] = $content;
    	$data['uid'] = $uid;
    	$data['time'] = time();
    	$mess->add($data);
    	//把数据发送到前台
    	$this->ajaxReturn($datas);
    }


    //删除留言
    public function del()
    {
        //接收要删除的留言id
        $id = I("get.id/d");
        //接收登录用户的id
        $sid = session('id');
        //查询被留言用户的id
        $li = M('message')->where("id={$id}")->select();
        $uid = $li[0]['uid'];
        //判断id是否为登录的用户id
        if($uid !== $sid){
            $this->ajaxReturn(0);
        }else{
            $da = M('message')->where("id={$id}")->delete();
            if ($da > 0) {
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(2);
            }
        }
    }

     public function _empty($name)
    {
        // echo '<h1>404</h1>';
        $this->display('Empty/404');
    }

}
