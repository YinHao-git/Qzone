<?php 

	//命名空间
	namespace Home\Controller;

	//导入类
	use Think\Controller;

	class UserController extends Controller
	{
		//首页
		public function index()
		{
			//实例化model模型
			//$model = new \Think\Model('user');
			$model = M('stu');
			// var_dump($model);
			$data = $model->order('id desc')->select();
			//发送数据
			$this->assign('list',$data);
			//加载模板
			$this->display();
		}
	}



