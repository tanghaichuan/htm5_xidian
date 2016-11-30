<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
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
        $this->display();
    }

    public function classify(){
    	$model=M("foods");
    	$food=I("get.food");
    	$this->assign("data",$data);

        import('Org.Util.Page');
        $count = $model->count();
        //实例化分页类，传入总记录数和每一页显示的记录数8
        $page = new \Think\Page($count,2);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $foodList = $model ->where(array('classify'=>$food)) -> page($nowPage.',2') -> select();
        $show = $page -> show();
        $this -> assign('page',$show);
        $this -> assign('foodList',$foodList); 
        $this->display("index");
    }
}