<?php
namespace Admin\Controller;
use Think\Controller;
class CartController extends Controller {
    public function index(){
       $this->display("list");
    }
}