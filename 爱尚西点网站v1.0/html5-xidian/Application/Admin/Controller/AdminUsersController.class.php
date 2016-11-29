<?php
namespace Admin\Controller;
use Think\Controller;
class AdminUsersController extends Controller {
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
        $usersModel = M("admin_users");
        //导入分页类
        import('Org.Util.Page');
        //查询满足要求的总记录数
        $count = $usersModel->count();
        //实例化分页类，传入总记录数和每一页显示的记录数8
        $page = new \Think\Page($count,2);
        //进行分页数Page方法的参数的前面部分是当前的页数，使用$_GET['p']获取
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        //进行分页数据查询，注意limit方法的参数要使用Page类的属性
        $list = $usersModel -> order('id desc') -> page($nowPage.',2') -> select();
        $show = $page -> show();//分页显示输出
        $this -> assign('page',$show);//赋值分页输出
        $this -> assign('list',$list);//赋值数据集  
        $this->display();
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