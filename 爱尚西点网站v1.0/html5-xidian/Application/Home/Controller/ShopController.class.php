<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function index(){
       $this->display("list");
    }
    public function content(){
       $this->display();
    }
}