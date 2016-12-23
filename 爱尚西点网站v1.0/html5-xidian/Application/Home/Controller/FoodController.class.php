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
      $food=$model->where(array('classify'=>"法式菜肴"))->order("food_public_time desc")->select();

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
      //轮播图
      $goods=M("mall")->order("public_time desc")->select();
      $this->assign("goods",$goods);


      //标签
      $tagList=M("tag_food_relation")->where(array('food_name'=>$content['name']))->select();
      $this->assign("tagList",$tagList);
      //评论
      $model=M("comment");
      $commentList = $model->where(array('food_id'=>$id))->select();
      import('Org.Util.Page');
      $count=count($commentList);
      $page = new \Think\Page($count,5);
      $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
      $page -> setConfig('first','第一页');
      $page -> setConfig('prev','<<');
      $page -> setConfig('next','>>');
      $commentList = $model->where(array('food_id'=>$id))-> order('id desc') -> page($nowPage.',5') -> select();
      $show = $page -> show();
      $this -> assign('page',$show);
      $this -> assign('commentList',$commentList); 
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

    public function addComment(){
      $data['username']=I("post.username");
      $data['food_id']=I("post.food_id");
      $data['comment']=I("post.comment");
      $data['com_time']=getTime();
      //echo $data['username'].$data['food_id'].$data['comment'].$data['com_time'];
      if(M('comment')->add($data)){
        echo "success";
      }
      else{
        echo "error";
      }
    }

}