<?php
namespace Admin\Controller;
use Think\Controller;
class FavoriteController extends Controller {
    public function index(){
       $this->display("list");
    }
}