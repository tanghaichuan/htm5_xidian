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

        import('Org.Util.Page');
        $count = $model->count();
        //实例化分页类，传入总记录数和每一页显示的记录数8
        $page = new \Think\Page($count,8);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $list = $model -> order('id desc') -> page($nowPage.',8') -> select();
        $show = $page -> show();
        $this -> assign('page',$show);
        $this -> assign('list',$list); 
        $this->display();
    }

    public function add(){
    	$model=M("tags");
        $data['tagname']=I("post.tagname");
        $unique=$model->where(array('tagname'=>I("post.tagname")))->find();
        
    	if( !$unique && $model->add($data)){
            echo "success";
        }
        else{
            echo "error";
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