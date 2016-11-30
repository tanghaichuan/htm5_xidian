<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
        parent::__construct();
        if(isLogin()){
            $userModel=M('public_users');
            $this->assign('username',$_COOKIE['username']);
        }
    }

    public function index(){
    	$this->display();
    }
}