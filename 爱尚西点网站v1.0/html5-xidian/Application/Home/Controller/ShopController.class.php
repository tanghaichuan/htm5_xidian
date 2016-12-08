<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function __construct(){
        parent::__construct();
        if(isLogin()){
            $userModel=M('public_users');
            $this->assign('username',session("username"));
        }
    }
    public function index(){
    	$model=M("mall");
      	$goods=$model->select();
      	//var_dump($food);
      	$this->assign("goods",$goods);
      	$this->display();
    }
    public function content(){
      $model=M("mall");
      $id = isset($_GET['id']) ? intval($_GET['id']) : '';
      $content=$model->find($id);
      $this->assign("content",$content);
      $this->display();
    }

    public function addCart(){
      $model=M("shopping_cart");
      $username=I("post.username");
      $data['mall_id']=I("post.mall_id");
      $user=M("public_users")->where(array('username'=>$username))->find();
      $data['user_id']=$user['id'];
      if($model->where($data)->find()){
        echo "same";
        return false;
      }
      if($model->add($data)){
        echo "success";
      }
      else{
        echo "error";
      }
      
    }

}