<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

       $this->display("login");
    }

    public function register(){
    	$this->display();
    }

    public function register_add(){
    	$adminModel=D("AdminUsers");
    	if ($adminModel->create() && $adminModel->add()) {
    			$this->success("插入成功！", U('Admin/login/index'));
    		}
    		else {
    			$this->error($adminModel->getError());
    		}
    }

    public function username_unique(){
    	$adminModel=M("admin_users");
    	$condition['username']=I("post.str");
    	if($adminModel->where($condition)->find()){
    		echo "error";
    	}
    }

}