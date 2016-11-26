<?php
namespace Admin\Controller;
use Think\Controller;
class TagController extends Controller {
    public function index(){
       $this->display("list");
    }
}