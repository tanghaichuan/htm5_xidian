<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
	public function __construct(){
        parent::__construct();
        if(isLogin()){
            $userModel=M('public_users');
            $this->assign('username',session("username"));
        }
    }
	
    public function index(){
       $this->display();
    }
}