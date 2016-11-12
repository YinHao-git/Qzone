<?php 

	namespace Admin\Controller;
	use Think\Controller;
	
	class PageController extends Controller{
		protected $totalRows;//总条数
		protected $pageSize; //页面显示条数
		protected $page; //当前页数
		protected $totalPages;//总页数
		protected $url;

		public function __construct($totalRows,$pageSize=10){
			$this->totalRows = $totalRows;
			$this->pageSize = $pageSize;
			//计算总页数
			$this->getTotalPages();
			//获取当前页 页码
			$this->getPage();
			//获取URL 给翻页按钮
			$this->getUrl();
		}


		//生成翻页按钮 html内容
		public function show(){
			$html = "共{$this->totalRows}条数据";
			$html .= "当前第{$this->page}/{$this->totalPages}页";
			$html .= "&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			$html .="<a href='{$this->url}?p=1'>首页</a>";
			$html .="<a href='{$this->url}?p=".($this->page-1)."'>&nbsp;&nbsp;<span class='glyphicon glyphicon-arrow-left'></span></a>";
			$html .="<a href='{$this->url}?p=".($this->page+1)."'>&nbsp;&nbsp;<span class='glyphicon glyphicon-arrow-right'></span>&nbsp;&nbsp;</a>";
			$html .="<a href='{$this->url}?p={$this->totalPages}'>尾页</a>";
			$this->assign('data',$html);
			$this->display('Admin/index');
		}

		//生成limit条件
		public function limit(){
			//(页码-1)*单页条数，每页条数
			//limit ($this->page-1)*$this->pageSize,$this->pageSize
			return ($this->page-1)*$this->pageSize.",".$this->pageSize;
		}

		//计算总页数
		protected function getTotalPages(){
			$this->totalPages = ceil($this->totalRows/$this->pageSize);
		}

		//获取当前页
		protected function getPage(){
			//从get中获取页码
			$page = empty($_GET['p'])?1:$_GET['p'];
			//判断范围
			if($page<1){
				$page = 1;
			}
			if($page>$this->totalPages){
				$page = $this->totalPages;
			}
			$this->page = $page;
		}

		//获取当前的Url
		protected function getUrl(){
			$this->url = $_SERVER['PHP_SELF'];
		}

	}


