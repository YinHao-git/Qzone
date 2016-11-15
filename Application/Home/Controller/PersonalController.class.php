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
		// dump($linklist);
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
		$birth=explode('-',$data[0]['birth']);
		// dump($birth);exit;
		$year=M('year');
		$yearlist=$year->select();
		// $pro=M('province');
		// $prolist=$pro->select();
		// echo $user->getLastSql();
		//年月日
		$this->assign('biry',$birth[0]);
		$this->assign('year',$yearlist);
		$this->assign('birm',$birth[1]);
		$this->assign('month',$monthlist);
		$this->assign('bird',$birth[2]);
		$this->assign('date',$datelist);
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
		if(empty($_POST)){
			$this->redirect('Personal/edit');
			exit;
		}
		// var_dump($_POST);exit;
		$birth=$_POST['birth_y']."-".$_POST['birth_m']."-".$_POST['birth_d'];
		// echo $birth;
		$id=session('id');
		M('user')->create();
		M('user')->where('id='.$id)->save();
		M('info')->create();
		M('info')->where('id='.$id)->save();
		
		M('info')->where('id='.$id)->setField('birth',$birth);
		$this->redirect('Personal/edit');
		// echo M('info')->getLastSql();
		
	}
}