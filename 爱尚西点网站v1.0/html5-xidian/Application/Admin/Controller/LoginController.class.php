<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
       $this->display("login");
    }

    public function login(){
        $Model=M("admin_users");
        $user=$Model->where(array('username'=>I('username')))->find(); 
        if(!$user || $user['password']!= I('password','','md5')){ 
                $this->error("账号或者密码错误！");
        }
        else{
            $data=array(
                'last_login_time'=>date('Y-m-d H-i-s')
                );
            $Model->where(array('username'=>I('username')))->save($data);
            session('uid',$user['id']);
            session('password',$user['password']);
            session('username',$user['username']);
            $this->success("登录中...",U("index/index"));
        }
    }


    public function register(){
    	$this->display();
    }

    public function register_add(){
    	$adminModel=D("AdminUsers");
    	if ($adminModel->create() && $adminModel->add()) {
    			$this->success("注册成功！", U('Admin/login/index'));
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