<?php
namespace Home\Controller;
use Think\Controller;
class PublishController extends Controller {
    public function index(){
       $this->display("publish");
    }
}