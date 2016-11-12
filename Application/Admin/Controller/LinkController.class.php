<?php 
	namespace Admin\Controller;
	use Think\Controller;

	class LinkController extends Controller
	{
		//链接首页
		public function index()
		{
			$data = M('link')->select();
			$this->assign('data',$data);
			$this->display('Link/index');
		}

		//链接添加页面
		public function add()
		{
			$this->display('Link/add');
		}


		//执行链接添加
		public function doadd()
		{
			if(empty($_POST)) {
				$this->error('请输入链接地址内容..');
			}else {
				if(M('link')->add($_POST)>0){
				$this->success('添加成功','index');
				}
			}
		}

		//链接公告删除
		public function del()
		{
			$id = I('get.id/d');
			if(M('link')->delete($id))
			{
				$this->success('链接删除成功');
			}else {
				$this->error('链接删除失败');
			}
		}

	}



