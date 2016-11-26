<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
       $this->display("list");
    }

    public function edit(){
    	$this->display();
    }

    public function editInfo(){
    	$this->display();
    }
}