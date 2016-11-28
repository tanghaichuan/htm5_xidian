<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
       $this->display("public");
    }
}