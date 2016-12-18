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
    public function content(){
      $data=I("post.data");
      $model=M("foods");
      $where['name']=array('like',$data.'%');
      $content=$model->where($where)->select();
      $this->redirect("Home/food/content/id/".$content[0]['id'],0);
    }
    public function search(){
      $data=I("post.data");
      $model=M("foods");
      $where['name']=array('like',$data.'%');
      $foodList=$model->where($where)->select();
      if($foodList){
        echo json_encode($foodList);
      }
      else{
        echo "";
      }
    }
}