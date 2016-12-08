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
        $model=M("shopping_cart");
        $username=session("username");
        $user=M("public_users")->where(array('username'=>$username))->find();
        $data['user_id']=$user['id'];
        $cart=$model->where('user_id='.$data['user_id'])->find();
        if($cart){
            $goods=M('mall')->where('id='.$cart['mall_id'])->select();
            $this->assign("goods",$goods);
        }
        $this->display();
    }
}