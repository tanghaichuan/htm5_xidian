<?php
namespace Home\Controller;
use Think\Controller;
class FoodController extends Controller {
    public function index(){
       $this->display("content");
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
       $this->display();
    }
    public function content(){
       $this->display();
    }
}