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
        $model=M("tags");
        $tagList=$model->select();
        $this->assign("tagList",$tagList);
        $this->display();
    }
}