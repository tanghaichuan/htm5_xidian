<?php
namespace Home\Controller;
use Think\Controller;
class PublishController extends Controller {
    public function __construct(){
        parent::__construct();
        if(isLogin()){
            $userModel=M('public_users');
            $this->assign('username',session("username"));
        }
    }
    public function index(){
    	$model=M("tags");
        $tagList=$model->select();
        $this->assign("tagList",$tagList);
        $this->display();
    }

    public function publish(){
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
        
        $model=M("foods");
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
            if($model->create()&&$model->add($data)&&$tag_rela_Model->addAll($tagData)){
                //$this->success('添加成功', U("food/add"));
                $this->redirect("publish/index",0);
            }else{
                 $this->error('添加失败');
            }
        }
    }
}