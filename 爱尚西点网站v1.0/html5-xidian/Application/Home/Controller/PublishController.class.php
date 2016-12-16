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
    	$model=M("foods");
    	$relation=M("user_publish_food");
    	$rela['food_name']=I("post.name");
    	$rela['user_name']=session("username");

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
            $data['publish_name']=session("username");
            //var_dump(I("post.tagname"));  
            //添加
            if($model->create()&&$model->add($data)&&$relation->add($rela)){
                //$this->success('添加成功', U("food/french_cate"));
                $this->redirect("food/french_cate",0);
            }else{
                 $this->error('添加失败');
            }
        }
    }
}