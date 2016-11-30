<?php
namespace Home\Controller;
use Think\Controller;
class FoodController extends Controller {
    public function index(){
       $this->display("french_cate");
    }
    public function us_cate(){

      $this->display();
    }
    public function uk_cate(){
       $this->display();
    }
    public function russian_cate(){
       $this->display();
    }
    public function italy_cate(){
       $this->display();
    }
    public function french_cate(){
      $model=M("foods");
      $food=$model->where(array('classify'=>"法式菜肴"))->select();
      //var_dump($food);
      $this->assign("food",$food);
      $this->display();
    }
    public function content(){
       $this->display();
    }
}