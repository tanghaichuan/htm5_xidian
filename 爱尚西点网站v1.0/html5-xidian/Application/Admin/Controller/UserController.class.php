<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
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
    	$usersModel = M("public_users");
        import('Org.Util.Page');
        $count = $usersModel->count();
        //实例化分页类，传入总记录数和每一页显示的记录数8
        $page = new \Think\Page($count,2);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $list = $usersModel -> order('id desc') -> page($nowPage.',2') -> select();
        $show = $page -> show();
        $this -> assign('page',$show);
        $this -> assign('list',$list); 
        $this->display();
        $this->display();
    }

    public function editInfo(){
    	if(IS_POST){
            $model=M("public_users");
            $id = isset($_GET['id']) ? intval($_GET['id']) : '';
            $data=array(
                "id"=>$id,
                "realname"=>I("post.realname"),
                "telphone"=>I("post.telphone")
            );
            if($model->create()&&$model->save($data)){
                $this->success("修改成功！",U("user/index"));
            }
            else{
                $this->error("修改失败！");
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : '';
            $data = M("public_users")->find($id);
            $this->assign("data", $data);
            $this->display("edit"); 
        }
    }
}