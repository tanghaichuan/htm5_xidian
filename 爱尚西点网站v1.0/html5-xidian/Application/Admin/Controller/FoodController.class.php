<?php
namespace Admin\Controller;
use Think\Controller;
class FoodController extends Controller {
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
        $model=M("foods");
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
        $tags=I("post.tags");
        $tagArr=explode(",",$tags);//一维数组
        $tagData = array();
        //重组数组
        $food_name=I("post.name");
        foreach($tagArr as $k=>$v){
            $tagData[$k]['tag_name']=$v;
            $tagData[$k]['food_name']=$food_name;
        }
        
        $tag_rela_Model=M("tag_food_relation");
        
        $step=I("post.step");
        $stepArr=explode("#",$step);//一维数组
        $stepData = array();
        //重组步骤数组
        foreach($stepArr as $k=>$v){
            $stepData[$k]['step']=$v;
            $stepData[$k]['food_name']=$food_name;
        }
       
        $model=D("foods");
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
            $data['publish_name']="西点官方";
            //var_dump(I("post.tagname"));  
            //添加
            if($model->create()&&$model->add($data)&&$tag_rela_Model->addAll($tagData)&&M('step')->addAll($stepData)){
                $this->redirect("food/index",0);
            }else{
                $this->assign('waitSecond',1);
                $this->assign('message','发布失败啦!');
                $this->error(U('food/add'));
            }
        }
    }
    public function edit(){
        if(IS_POST){
            $tags=I("post.tags");
            $tagArr=explode(",",$tags);//一维数组
            $tagData = array();
            //重组数组
            $food_name=I("post.name");
            foreach($tagArr as $k=>$v){
                $tagData[$k]['tag_name']=$v;
                $tagData[$k]['food_name']=$food_name;
            }

            $tag_rela_Model=M("tag_food_relation");
            

            $step=I("post.step");
            $stepArr=explode("#",$step);//一维数组
            $stepData = array();
            //重组步骤数组
            foreach($stepArr as $k=>$v){
                $stepData[$k]['step']=$v;
                $stepData[$k]['food_name']=$food_name;
            }
            $model=D("foods");
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
                $data['publish_name']="西点官方";
                //var_dump(I("post.tagname")); 
                //添加
                if($model->where(array('id'=>I('post.id')))->save($data)){
                    $this->redirect("food/index",0);
                }else{
                    $this->assign('waitSecond',1);
                    $this->assign('message','修改失败啦!');
                    $this->error(U('food/add'));
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : '';
            $model=M('foods');
            $tagData=M('tags')->select();
            $stepModel=M('step');
            $data=$model->find($id);
            $stepData=$stepModel->where(array('food_name'=>$data['name']))->select();
            $this->assign('tagData',$tagData);
            $this->assign("data",$data);
            $this->display();
        }
    }

    public function del(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if(M("foods")->delete($id)){
            $this->redirect('food/index',0);
            //$this->success("删除成功！");
        }
        else{ 
            $this->error("删除失败！");
        }
    }

    public function searchFood(){
        $model=M("foods");
        $name=I("post.name");
        $where['name']=array('like','%'.$name.'%');
        $foodList=$model->where($where)->select();
        $this -> assign('foodList',$foodList); 
        $this->display('index');
    }

    public function comment(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        $model=M("foods");
        $food=$model->find($id);
        $comment=M("comment")->where(array('food_id'=>$id))->select();
        import('Org.Util.Page');
        $count = $model->count();
        //实例化分页类，传入总记录数和每一页显示的记录数8
        $page = new \Think\Page($count,12);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $foodList = $model -> order('id desc') -> page($nowPage.',12') -> select();
        $show = $page -> show();
        $this->assign("comment",$comment);
        $this->assign("food",$food);
        $this -> assign('page',$show);
        $this -> assign('foodList',$foodList);
        $this->display();
    }
    public function delComment(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if(M("comment")->where(array('id'=>$id))->delete()){
            //$this->success("删除成功!",U('food/comment'));
            $this->redirect("food/comment",0);
        }
        else{
            $this->error("删除失败!");
        }
    }
}