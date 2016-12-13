<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
        parent::__construct();
        if(isLogin()){
            $userModel=M('public_users');
            $this->assign('username',session("username"));
        }
    }
    public function index(){
      $model=M("tuisong");
      $lists = $model -> order('id desc') ->limit(3)-> select();
      $this -> assign('lists',$lists); 
      $this->display();
    }

    
}