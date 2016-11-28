<?php
namespace Home\Controller;
use Think\Controller;
class UsersController extends Controller {
    public function index(){
       $this->display();
    }
    public function reset_information(){
       $this->display();
    }
    public function reset_password(){
       $this->display();
    }

}