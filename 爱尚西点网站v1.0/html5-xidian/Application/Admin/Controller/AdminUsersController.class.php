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
    }

    public function add(){
        if(IS_POST){
            $model=D("adminUsers");
            if($model->create()&&$model->add()){
                $this->success("添加成功！", U('Admin/adminUsers/index'),0);
            }
            else{
                $this->error("添加失败！");
            }
        }
        else{
            $this->display();
        }
    }

    public function editInfo(){
        if(IS_POST){
            $model=M("admin_users");
            $id = isset($_GET['id']) ? intval($_GET['id']) : session('uid');
            $data=array(
                "id"=>$id,
                "realname"=>I("post.realname"),
                "telphone"=>I("post.telphone")
            );
            if($model->create()&&$model->save($data)){
                $this->success("修改成功！",U("adminUsers/index"),0);
            }
            else{
                $this->error("修改失败！");
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : session('uid');
            $data = M("admin_users")->find($id);
            $this->assign("data", $data);
            $this->assign("id",$id);
            $this->display(); 
        }
        
    }  

    public function editPwd(){
        if(IS_POST){
            $model=M("admin_users");
            $model->create();
            //var_dump(session('password'));
            if(I('post.password','','md5')!=session('password')){ 
                $this->error("密码错误！");
            }
            else{
                $id=array(
                'id'=>session('uid'),
                'password'=>I('post.newPwd','','md5'),
                );
                if($model->save($id)){
                    session('password',I('post.newPwd','','md5'));
                    $this->success("修改成功", U("Admin/login/index"));
                }
                else{ 
                    $this->error("修改失败！");
            
                }
            }
        }
        else{
           $username=session("username");
            $this->assign("username",$username);
            $this->display(); 
        }
    }

    public function del(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if(M("admin_users")->delete($id)){
            $this->redirect('adminUsers/index',0);
            //$this->success("删除成功",0);
        }
        else{ 
            $this->error("删除失败！");
        }
    }

    public function username_unique(){
        $adminModel=M("admin_users");
        $condition['username']=I("post.str");
        if($adminModel->where($condition)->find()){
            echo "error";
        }
    }
}