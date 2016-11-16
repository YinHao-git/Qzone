<?php 

	//命名空间
	namespace Admin\Controller;

	//导入类
	use Think\Controller;

	class AdminController extends Controller
	{
		//首页
		public function index()
		{
			$data = M('admin');
			$count = $data->count();// 查询满足要求的总记录数
			$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $data->limit($Page->firstRow.','.$Page->listRows)->
			select();

			$this->assign('title','后台用户管理');
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display('Admin/index'); // 输出模板

		}

		//头像上传
		public function upload(){
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 3145728 ;// 设置附件上传大小
			$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = './Public'; // 设置附件上传根目录
			$upload->savePath = './Uploads/'; // 设置附件上传（子）目录
			$upload->autoSub = false;//关闭自动使用子目录保存
			// 上传文件
			$info = $upload->upload();
			if(!$info) {// 上传错误提示错误信息
			$this->error("请上传头像..");
			}else{// 上传成功
			// $this->success("头像上传成功");
				foreach($info as $file){
					
				$photo=$file['savename'];
			
					$admin = M('admin');
					$data['photo'] = $photo;
					$data['name'] = $_POST['name'];
					$data['pwd'] = $_POST['pwd'];
					$data['sex'] = $_POST['sex'];
					$data['age'] = $_POST['age'];
					$data['address'] = $_POST['address'];
					$data['status'] = $_POST['status'];
					$data['phone'] = $_POST['phone'];
					$data['addtime'] = time();
					$result = $admin->data($data)->add();
					if($result){
						$this->success("用户添加成功",'Index/index');
					}else{
						$this->error("用户添加失败");
					}
				}
			}
		}


		//编辑页面
		public function edit()
		{
			$id = I('get.id/d');
			$condition['id']=$id;
			$data = M('admin')->where($condition)->select();
			foreach ($data as $v) {
				$this->assign('date',$v);
			}
				$this->display('Admin/edit');
		}

		//提交修改 自动验证
		public function update()
		{
			$Admin = D("Admin");
			if(!$Admin->create()) {
				// 如果创建失败 表示验证没有通过 输出错误提示信息
				$this->error($Admin->getError());
			}else {
				$data = $_POST;
				if(M('admin')->save($data)){
					$this->success('修改成功','Index/index');
				}

			}
		}


		//用户删除
		public function del()
		{
			$id = I('get.id/d');
			if(M('admin')->delete($id)>0){
				$this->success('删除成功了');
			}else {
				$this->error('删除失败了');
			}
		}

	}




