<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function index(){
    	$model=M("mall");
      	$goods=$model->where(array('classify'=>"食材"))->select();
      	//var_dump($food);
      	$this->assign("goods",$goods);
      	$this->display();
    }
    public function content(){
      $model=M("mall");
      $id = isset($_GET['id']) ? intval($_GET['id']) : '';
      $content=$model->find($id);
      $this->assign("content",$content);
      $this->display();
    }


}