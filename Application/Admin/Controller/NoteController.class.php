<?php 
	namespace Admin\Controller;
	use Think\Controller;

	class NoteController extends Controller
	{
		public function index()
		{
			$this->display('Notice/index');
		}

		public function add()
		{
			$this->display('Notice/add');
		}
	}



