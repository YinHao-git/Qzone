<?php 
	namespace Admin\Controller;
	use Think\Controller;

	class NoticeController extends Controller
	{
		//公告首页
		public function index()
		{
			$data = M('notice')->select();
			$this->assign('data',$data);
			$this->display('Notice/index');
		}

		//公告添加页面
		public function add()
		{
			$this->display('Notice/add');
		}


		//执行公告添加
		public function doadd()
		{
			if($_POST['content']==' ' || empty($_POST['content'])) {
				$this->error('请输入公告内容..');
			}else {
				if(M('notice')->add($_POST)>0){
				$this->success('发表成功','index');
				}
			}
		}

		//执行公告删除
		public function del()
		{
			$id = I('get.id/d');
			if(M('notice')->delete($id))
			{
				$this->success('公告删除成功');
			}else {
				$this->error('公告删除失败');
			}
		}

	}



