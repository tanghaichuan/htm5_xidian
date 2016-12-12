<?php
namespace Admin\Controller;
use Think\Controller;
class FavoriteController extends Controller {
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
        $favorModel=M("favorite");
        $foodList = $favorModel->where(array("user_name"=>$choose['username']))->join('foods on favorite.food_id=foods.id')->select();
        import('Org.Util.Page');
        $count=count($foodList);
        $page = new \Think\Page($count,5);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $foodList = $favorModel->where(array("user_name"=>$choose['username']))->join('foods on favorite.food_id=foods.id') -> order('id desc') -> page($nowPage.',5') -> select();
        $show = $page -> show();
        $this -> assign('page',$show);
        $this -> assign('foodList',$foodList); 
        $this->display();
    }

    public function del(){
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
        $username=$_GET['username'];
        if(M("favorite")->where(array('food_id'=>$id,'user_name'=>$username))->delete()){
            $this->success("删除成功!",U("favorite/index"));
        }
        else{
            $this->error("删除失败!");
        }
    }

}