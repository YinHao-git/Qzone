<?php
namespace Admin\Controller;

use Think\Controller;

class UserhController extends Controller
{
	//用户列表
	public function index()
	{

		$user = M('user');
		$count = $user->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $user->limit($Page->firstRow.','.$Page->listRows)->select();

		$this->assign('title1','前台用户管理');
		$this->assign('title2','用户基本信息');
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	
	}

	//用户删除
	public function del()
	{
		if (empty($_GET['id'])) {
			$this->redirect('Admin/Userh/index');
			exit;
		}
		//过滤数据
		$id=I('get.id/d');
		if (M('user')->delete($id)>0) {
			$this->success('删除成功',U('index'));
		}else{
			$this-error('删除失败',U('index'));
		}
	}

	//查看用户 find 
	public function edit()
	{
		if (empty($_GET['id'])) {
			$this->redirect('Admin/Userh/index');
			exit;
		}
		$id=I('get.id/d');
		$data=M('user')->find($id);
		// dump($data);
		$this->assign('title',$data['username'].'的管理');
		$this->assign('data',$data);
		$this->display('Userh/edit');
	}
	//修改
	public function update()
	{
		// dump($_POST);
		if(empty($_POST)){
			
			$this->redirect('Userh/edit');
			exit;
		}
		M('user')->create();
		if(M('user')->save()>0) {
			$this->success('修改成功',U('Userh/index'));
		}else{
			$this->error('修改失败');
		}

	}

	// 用户详细信息
	public function getInfo()
	{
		
		$data = M('info');
		$count = $data->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $data->limit($Page->firstRow.','.$Page->listRows)->
		select();

		// $list=M('info')->select();
		// dump($data);exit;
		$this->assign('title1','用户管理');
		$this->assign('page',$show);
		$this->assign('title2','用户详细信息');
		$this->assign('list',$list);
		$this->display();
	}
	//查看用户详细信息
	public function check()
	{
		if (empty($_GET['id'])) {
			$this->redirect('Admin/Userh/getInfo');
			exit;
		}
		$id=I('get.id/d');
		$data=M('info')->find($id);
		// dump($data);
		$this->assign('title',$data['name'].'的详细信息');
		$this->assign('data',$data);
		$this->display('Userh/check');
		
	}
	
	//用户信息查询
	public function search()
	{
		
		
		$map=array();
		foreach ($_POST as $k => $v) {
			
			// dump($k);
			switch ($k) {
				case 'username':
					
					if(empty($_POST['username'])){
						$this->redirect('Userh/index');
						exit;
					}
					M('user')->create();
					$map[$k]=array('like',"%$v%");
					// $data=M('user')->where($map)->select();
					$user=M('user');
					$count=$user->where($map)->count();
					$Page = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
					// foreach($map as $key=>$val) {
					// $Page->parameter[$key] = urlencode($val);
					// }
					$show = $Page->show();// 分页显示输出
					// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
					$list = $user->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
					$this->assign('list',$list);
					$this->assign('page',$show);// 赋值分页输出

					// $this->redirect('Userh/index');
					// exit;
					$this->assign('title2','查询结果');
					
					$this->display('Userh/index');
					break;
				case 'uid':
					if(empty($_POST['uid'])){
						$this->redirect('Userh/getInfo');
						exit;
					}
					M('info')->create();
					$map[$k]=array('eq',$v);

					$user=M('info');
					$count=$user->where($map)->count();
					$Page = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
					$show = $Page->show();// 分页显示输出
					// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
					$list = $user->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
					$this->assign('list',$list);
					$this->assign('page',$show);// 赋值分页输出

					// $data=M('info')->where($map)->select();
					// echo M('user')->getLastSql();
					$this->assign('title2','查询结果');
					$this->display('Userh/getInfo');
					break;
			}
		}
		

		
	}
}


