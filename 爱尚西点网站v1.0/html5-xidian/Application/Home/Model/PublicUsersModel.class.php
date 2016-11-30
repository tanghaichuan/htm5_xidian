<?php
namespace Home\Model;
use Think\Model;

class PublicUsersModel extends Model {
	protected $_validate = array(
			array("username", "require", "用户名不能为空！"),
			array("password", "require", "用户名不能为空！"),
			array("username", "", "用户名已存在！", 0, "unique"),
		);

	protected $_auto = array(
			array("password","md5",3,"function"),
			array('reg_login_time', 'getTime', 1, 'function'),
			array('last_login_time', 'getTime', 1, 'function')	
		);
}