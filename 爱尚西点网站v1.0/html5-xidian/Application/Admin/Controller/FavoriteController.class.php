<?php
namespace Admin\Controller;
use Think\Controller;
class FavoriteController extends Controller {
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
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
    	$model=M("public_users");
    	$userList=$model->select();
    	$choose=$model->find($id);
    	$this->assign("choose",$choose);
    	$this->assign("userList",$userList);
        $this->display();
    }

    public function manageFav(){
    	
    }
}