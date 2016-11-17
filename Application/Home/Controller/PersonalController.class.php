<?php
namespace Home\Controller;

use Think\Controller;

class PersonalController extends Controller
{
	//我的个人档
	public function index()
	{
		//友情链接
		$linklist=M('link')->select();
		// dump($linklist);exit;
		$this->assign('linklist',$linklist);

		$id=session('id');
		// dump($id);
		$user=M('user');
		$data=$user->field('user.username,user.sex,user.phone,user.photo,info.name,info.age,info.birth,info.race')->table('qzone_user user,qzone_info info')->where('user.id=info.uid and user.id='.$id)->select();
		// echo $user->getLastSql();
		// dump($data);exit;
		$this->assign('list',$data);
		$this->display('Personal/index');
	}

	//修改个人档
	public function edit()
	{
		//友情链接
		$linklist=M('link')->select();
		// dump($linklist);
		// $linklist=1;
		$this->assign('linklist',$linklist);
		
		$id=session('id');
		$user=M('user');
		$data=$user->field('user.username,user.sex,user.phone,info.name,info.age,info.birth,info.race')->table('qzone_user user,qzone_info info')->where('user.id=info.uid and user.id='.$id)->select();
		// dump($data);
		// dump($data[0]['birth']);exit;
		//拆分年月日
		$birth=explode('-',$data[0]['birth']);
		//年月日
		$this->assign('year',$birth[0]);
		$this->assign('month',$birth[1]);
		$this->assign('day',$birth[2]);
		//省份 城市
		// $this->assign('province',$prolist);
		// dump($prolist);exit;
		$this->assign('list',$data);
		$this->display('Personal/edit');

	}

	//保存修改
	public function save()
	{
		// dump($_POST);
		if(empty($_POST['username'])){
			$this->ajaxReturn('昵称为空');
			// $this->redirect('Personal/edit');
			exit;
		}
		// var_dump($_POST);exit;
		$birth=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
		// echo $birth;
		$id=session('id');
		M('user')->create();
		M('user')->where('id='.$id)->save();
		M('info')->create();
		M('info')->where('id='.$id)->save();
		
		M('info')->where('id='.$id)->setField('birth',$birth);
		$this->ajaxReturn('修改成功');
		// $this->redirect('Personal/edit');
		// echo M('info')->getLastSql();
		
	}
	//修改密码
	public function editpwd()
	{
		//友情链接
		$linklist=A('Link','Event')->index();
		// dump($linklist);exit;
		$this->assign('linklist',$linklist);
		$this->display('Personal/editpwd');
	}
	public function savepwd()
	{
		// if (!IS_AJAX) {
  //           $this->error('sdsadsa',U('Personal/editpwd'));
  //           exit;
  //       }
		
		// dump($_POST);exit;

		if(empty($_POST['pwd'])||empty($_POST['repwd'])){
			// $this->redirect('Personal/editpwd');
			$this->ajaxReturn('修改');
			
			// exit;
		}
		if($_POST['pwd']!==$_POST['repwd']){
			$this->error('两次密码不一样...');

		}
		if($_POST['pwd']===$_POST['repwd']){
			M('user')->create();
			$data=M('user')->where('id='.session('id'))->setField('pwd',$_POST['pwd']);
		// echo M('user')->getLastSql();
			// dump($data);
			if($data){
				// $this->success('修改成功');
				$this->ajaxReturn('修改成功');
			}else{
				// $this->error('修改失败');
				$this->ajaxReturn('修改失败');

			}
		}
	}
}