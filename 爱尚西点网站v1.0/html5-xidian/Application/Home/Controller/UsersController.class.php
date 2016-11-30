<?php
namespace Home\Controller;
use Think\Controller;
class UsersController extends Controller {
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
    }
    public function reset_information(){
       if(IS_POST){
            $model=M("public_users");
            $id = isset($_GET['id']) ? intval($_GET['id']) : session('uid');
            $data=array(
                "id"=>$id,
                "realname"=>I("post.realname"),
                "telphone"=>I("post.telphone")
            );
            if($model->create()&&$model->save($data)){
                $this->success("修改成功！",U("users/index"),0);
            }
            else{
                $this->error("修改失败！");
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : session('uid');
            $data = M("public_users")->find($id);
            $this->assign("data", $data);
            $this->assign("id",$id);
            $this->display(); 
        }
        
    }
    public function reset_password(){
       if(IS_POST){
            $model=M("public_users");
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
                    $this->success("修改成功", U("Home/login/index"));
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

    function isMobile($mobile) {
    if (!is_numeric($mobile)) {
        return false;
    }
    return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
}

}