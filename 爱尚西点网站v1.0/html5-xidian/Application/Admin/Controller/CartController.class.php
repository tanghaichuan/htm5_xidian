<?php
namespace Admin\Controller;
use Think\Controller;
class CartController extends Controller {
	public function __construct(){
		parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("Admin/login/index"));
		}
		else{ 
			$userModel=M('admin_users');
			$this->assign('username',$_SESSION['username']);
		}
	}
	
    public function index(){
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
    	$model=M("public_users");
    	$userList=$model->select();
    	$choose=$model->find($id);
    	$this->assign("choose",$choose);
    	$this->assign("userList",$userList);
        $cartModel=M("shopping_cart");
        $foodList = $cartModel->where(array("user_id"=>$choose['id']))->join('mall on shopping_cart.mall_id=mall.id')->select();
        import('Org.Util.Page');
        $count=count($foodList);
        $page = new \Think\Page($count,5);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $foodList = $cartModel->where(array("user_id"=>$choose['id']))->join('mall on shopping_cart.mall_id=mall.id') -> order('id desc') -> page($nowPage.',5') -> select();
        $show = $page -> show();
        $this -> assign('page',$show);
        $this -> assign('foodList',$foodList); 
        $this->display();
    }

    public function del(){
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
        $username=$_GET['username'];
        $user=M('public_users')->where(array('username'=>$username))->find();
        if(M("shopping_cart")->where(array('mall_id'=>$id,'user_id'=>$user['id']))->delete()){
            //$this->success("删除成功!",U("favorite/index"));
            $this->redirect("favorite/index",0);
        }
        else{
            $this->error("删除失败!");
        }
    }
}