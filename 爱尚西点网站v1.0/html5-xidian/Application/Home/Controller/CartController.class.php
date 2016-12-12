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
        $cart=$model->where(array("user_id"=>$user['id']))->join('mall on shopping_cart.mall_id=mall.id')->select();
        $this->assign("goods",$cart);
        $this->display();
    }

    public function delCart(){
        $id=I("post.id");
        $username=I("post.username");
        $user_id=M("public_users")->where(array('username'=>$username))->find();
        $data['user_id']=$user_id['id'];
        $data['mall_id']=$id;
        if(M('shopping_cart')->where($data)->delete()){
            echo "success";
        }
        else{
            echo "error";
        }
    }
}