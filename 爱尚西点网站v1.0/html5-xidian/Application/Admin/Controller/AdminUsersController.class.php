<?php
namespace Admin\Controller;
use Think\Controller;
class AdminUsersController extends Controller {
    public function index(){
       $this->display("list");
    }

    public function add(){
    	$this->display();
    }

    public function editInfo(){
    	$this->display();
    }
    public function editPwd(){
    	$this->display();
    }
}