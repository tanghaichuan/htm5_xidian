<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends Controller {
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
    	$model=M('mall');
        import('Org.Util.Page');
        $count = $model->count();
        //实例化分页类，传入总记录数和每一页显示的记录数8
        $page = new \Think\Page($count,2);
        $nowPage = isset($_GET['p'])?intval($_GET['p']):1;
        $page -> setConfig('first','第一页');
        $page -> setConfig('prev','<<');
        $page -> setConfig('next','>>');
        $list = $model -> order('id desc') -> page($nowPage.',2') -> select();
        $show = $page -> show();
        $this -> assign('page',$show);
        $this -> assign('list',$list); 
        $this->display();
    }

    public function add(){
    	if(IS_POST){
    		$model=M("mall");
    		//商品数量或价格必须是数字
    		if(!is_numeric(I("post.price"))|| !is_numeric(I("post.num"))){
    			$this->error("价格或数量信息有误！");
    		}
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
				$data['public_time']=getTime();
				//var_dump($data);
				//添加
				if($model->add($data)){
					$this->success('美食添加成功', 'index');
				}else{
					$this->error('美食添加失败');
				}
		    }
    	}
    	else{
    		$this->display();
    	}
    }

    public function edit(){
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
    	$model=M('mall');
    	$data=$model->find($id);
    	$this->assign("data",$data);
		$this->display();
    }

    public function update(){
    		$model=M("mall");
    		//商品数量或价格必须是数字
    		if(!is_numeric(I("post.price")) || !is_numeric(I("post.num")) || I('post.classify')==""){
    			$this->error("商品信息有误！");
    		}
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
				//var_dump();
				//添加
				if($model->save($data)){
					$this->success('数据修改成功', U('Admin/shop/index'));
				}else{
					$this->error('数据修改失败');
				}
		    }
    }

    public function del(){
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if(M("mall")->delete($id)){
        	$this->redirect('shop/index',0);
            //$this->success("删除成功！");
        }
        else{ 
            $this->error("删除失败！");
        }
    }
}