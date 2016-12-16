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
        $model=M("tuisong");
        import('Org.Util.Page');
        $count = $model->count();
        //实例化分页类，传入总记录数和每一页显示的记录数8
        $page = new \Think\Page($count,8);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $foodList = $model -> order('id desc') -> page($nowPage.',8') -> select();
        $show = $page -> show();
        $this -> assign('page',$show);
        $this -> assign('foodList',$foodList); 
        $this->display();
    }

    public function add(){
        $model=M("tags");
        $tagList=$model->select();
        $this->assign("tagList",$tagList);
        $this->display();
    }

    public function store(){
        $model=D("tuisong");
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize=3145728 ;// 设置附件上传大小
        $upload->exts=array('jpg', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
        $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }
        else{// 上传成功
            $data = $model->create();
                //设置img字段属性(目录+名字)
            $data['img']=$info['img']['savepath'].$info['img']['savename'];
            $data['food_public_time']=getTime();
            $data['classify']=I("post.classify");
            $data['tagname']=I("post.tagname");
            //var_dump(I("post.tagname"));  
            //添加
            if($model->create()&&$model->add($data)){
                //$this->success('添加成功', U("public/index"));
                $this->redirect("public/index",0);
            }else{
                 $this->error('添加失败');
            }
        }
    }

    public function comment(){
        $this->display();
    }

    public function edit(){
        if(IS_POST){
            $model=D("tuisong");
            $id = isset($_GET['id']) ? intval($_GET['id']) : '';
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
            $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }
            else{// 上传成功
                $data = $model->create();
                    //设置img字段属性(目录+名字)
                $data['img']=$info['img']['savepath'].$info['img']['savename'];
                $data['id']=I("get.id");
                //var_dump($id);  
                //添加
                if($model->save($data)){
                    //$this->success('修改成功', U('public/index'));
                    $this->redirect("public/index",0);
                }else{
                     $this->error('修改失败');
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : '';
            $model=M('tuisong');
            $tagModel=M("tags");
            $data=$model->find($id);
            $tagList=$tagModel->select();
            $this->assign("tagList",$tagList);
            $this->assign("data",$data);
            //var_dump($data);
            $this->display();
        }
    }

    public function del(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if(M("tuisong")->delete($id)){
            $this->redirect('public/index',0);
            //$this->success("删除成功！");
        }
        else{ 
            $this->error("删除失败！");
        }
    }

    public function searchFood(){
        $model=M("tuisong");
        $name=I("post.name");
        $where['name']=array('like','%'.$name.'%');
        $foodList=$model->where($where)->select();
        $this -> assign('foodList',$foodList); 
        $this->display('index');
    }
}