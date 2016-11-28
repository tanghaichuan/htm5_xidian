<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login/index"));
		}
		else{ 
			$userModel=M('admin_users');
			$this->assign('username',$_SESSION['username']);
		}
	}
    public function index(){
       $this->display("list");
    }

    public function edit(){
    	$this->display();
    }

    public function editInfo(){
    	$this->display();
    }
}