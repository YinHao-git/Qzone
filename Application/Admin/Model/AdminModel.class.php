<?php

	namespace Admin\Model;
	use Think\Model;
	class AdminModel extends Model{
	protected $_validate = array(
		// array('verify','require','验证码必须！'), //默认情况下用正则进行验证
		array('name','','用户名已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
		array('age',array(1,100),'年龄的范围不正确！',2,'between'), // 当值不为空的时候判断是否在一个范围内
		array('address','require','地址必须填写'), // 验证确认密码是否和密码一致
		array('phone','require','手机号必须填写'), // 自定义函数验证密码格式
		);
	}






