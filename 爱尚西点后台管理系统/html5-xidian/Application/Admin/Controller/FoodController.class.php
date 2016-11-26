<?php
namespace Admin\Controller;
use Think\Controller;
class FoodController extends Controller {
    public function index(){
       $this->display("list");
    }

    public function add(){
    	$this->display();
    }

    public function comment(){
    	$this->display();
    }

    public function edit(){
    	$this->display();
    }
}