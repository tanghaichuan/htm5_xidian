<?php
namespace Admin\Controller;
use Think\Controller;
class TagController extends Controller {
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
    	$model=M('tags');
    	$list=$model->select();
    	$this->assign("list",$list);
        $this->display();
    }

    public function add(){
    	$model=M("tags");
    	if($model->create() && $model->add()){
    		$this->success("添加成功!",U("tag/index"));
    	}
    	else{
    		$this->error("添加失败");
    	}
    }

    public function del(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if(M("tags")->delete($id)){
            $this->success("删除成功",U('tag/index'));
        }
        else{ 
            $this->error("删除失败！");
        }
    }

}