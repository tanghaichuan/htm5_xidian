<?php
namespace Home\Controller;
use Think\Controller;
class FoodController extends Controller {
    public function __construct(){
        parent::__construct();
        if(isLogin()){
            $userModel=M('public_users');
            $this->assign('username',session("username"));
        }
    }
    public function index(){
       $this->display("french_cate");
    }
    public function us_cate(){
      $model=M("foods");
      $food=$model->where(array('classify'=>"美式菜肴"))->select();
      //var_dump($food);
      $this->assign("food",$food);
      $this->display();

    }
    public function uk_cate(){
      $model=M("foods");
      $food=$model->where(array('classify'=>"英式菜肴"))->select();
      //var_dump($food);
      $this->assign("food",$food);
      $this->display();
    }
    public function russian_cate(){
      $model=M("foods");
      $food=$model->where(array('classify'=>"俄式菜肴"))->select();
      //var_dump($food);
      $this->assign("food",$food);
      $this->display();
    }
    public function italy_cate(){
      $model=M("foods");
      $food=$model->where(array('classify'=>"意式菜肴"))->select();
      //var_dump($food);
      $this->assign("food",$food);
      $this->display();
    }
    public function french_cate(){
      $model=M("foods");
      $food=$model->where(array('classify'=>"法式菜肴"))->select();

      //$count=$model
      //var_dump($food);
      $this->assign("food",$food);
      $this->display();
    }
    public function content(){
      $model=M("foods");
      $id = isset($_GET['id']) ? intval($_GET['id']) : '';
      $content=$model->find($id);
      $this->assign("content",$content);
      $this->display();
    }

    public function favorite(){
      $data['food_id']=I("post.id");
      $data['user_name']=I("post.username");
      $model=M("favorite");
      if($model->where($data)->find()){
        if($model->where($data)->delete()){
          echo "quitSuccess";
        }
        else{
          echo "quitError";
        }
      }
      else{
        if($model->add($data)){
          echo "success";
        }
        else{
          echo "error";
        }
      } 
    }

    public function getFav(){
      $model=M("favorite");
      $data['food_id']=I("post.id");
      $data['user_name']=I("post.username");
      if($model->where($data)->find()){
        echo "like";
      }
      else{
        echo "unlike";
      }
    }
}