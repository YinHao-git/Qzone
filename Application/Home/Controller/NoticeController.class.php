<?php
namespace Home\Controller;
use Think\Controller;
/**
*
*/
class NoticeController extends Controller
{
	public function index()
	{
		$id=session('id');
		$phone = session('phone');
        if(empty($phone)){
            $this->error('请登录',U('Login/index'));
        }
		$notice = M('Notice');
		$data = $notice->order('id desc')->limit(10)->select();
		$theme = M('theme')->select();
        $this->assign('theme',$theme);
		$this->assign('data',$data);
		$info = M('Notice')->where('status=1')->select();
		$reply=M('Reply')->where("uid=$id and status=1")->select();
		$links = M('links')->select();
        $this->assign('links',$links);
		$this->assign('reply',$reply);
        $this->assign('info',$info);
		$this->display();
	}
	public function save()
	{
		$id = I('get.id');
		$notice = M('Notice');
		$data['status'] = 2;
		$notice->field('status')->where("id=$id")->save($data);
		$this->redirect('Notice/index');
	}
	public function _empty($name)
    {
        // echo '<h1>404</h1>';
        $this->display('Empty/404');
    }
}
