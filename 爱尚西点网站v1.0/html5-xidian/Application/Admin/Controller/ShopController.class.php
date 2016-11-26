<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function index(){
       $this->display("list");
    }

    public function add(){
    	$this->display();
    }

    public function edit(){
		$this->display();
    }

}