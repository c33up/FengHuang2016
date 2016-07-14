<?php
namespace Admin\Controller;
use Think\Controller;
class PictureController extends BaseController {
    public function index($key=""){
        $category=I('category');
        if($key === ""){
            $model = M('picture');  
            $where['category'] = iconv('gb2312','utf-8', $category);
            // 把查询条件传入查询方法
            //$model=$User->where($where)->select();
        }else{
            $where['category'] = iconv('gb2312','utf-8', $category);
            $where['key'] = array('like',"%$key%");
            $where['_logic'] = 'or';
            $model = M('picture')->where($where); 
        } 
        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $picture = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
        //dump($article);
        
        $this->assign('picture', $picture);
        $this->assign('category', iconv('gb2312','utf-8', $category));
        $this->assign('page',$show);
        $this->display();     
    }

    //保存上传配置
    public function add()
    {
         $category=I('category');
         $time=date("Y-m-d h:i:sa");
         //默认显示添加表单
        if (!IS_POST) {

            //echo $category;
            $this->assign('category', iconv('gb2312','utf-8', $category));
            $this->assign('time', $time);
            $this->display();
        }
        if (IS_POST) {
            if(empty($_FILES["imageURL"][tmp_name])){
                $this->error("请上传图片");
            }else{
            if(isset($_FILES['imageURL'])){
                $upload = new \Think\Upload();// 实例化上传类
                //$upload->maxSize = 3145728 ;// 设置附件上传大小
                $upload->saveName ='time';
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './Uploads/Image/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
                // 上传文件
                $info = $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    foreach($info as $file){
                    $imageurl='/Uploads/Image/'.$file['savepath'].$file['savename'];
                    }
                }
            }
            }
            $model = M("picture");
           // $model->imageURL=$imageurl;
           // $model->category=$category;
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                $date['intro']=I('intro');
                $date['imageURL']=$imageurl;
                $date['category']=$category;
                if ($model->add($date)) {
                    $this->success("图片添加成功", U('picture/index',array('category'=>$category)));
                } else {
                    $this->error("图片添加失败");
                }
            } 
         }
    }


        /**
     * 更新图片信息
     * @param  [type] $id [文章ID]
     * @return [type]     [description]
     */
    public function update()
    {
    	
        //默认显示添加表单
        if (!IS_POST) {
            $id = intval(I('id'));
            $category=iconv('gb2312','utf-8', I('category'));
            $where['id']=$id;
            $where['category']=$category;
            $model = M('picture')->where($where)->find();
            //dump($model);
            $this->assign('model',$model);
            $this->display();
        }
        if (IS_POST) {
            
            if(empty($_FILES["imageURL"][tmp_name])){
                $imageurl=I('eximageURL');
            }else{
                $upload = new \Think\Upload();// 实例化上传类
                //$upload->maxSize = 3145728 ;// 设置附件上传大小
                $upload->saveName ='time';
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = './Uploads/Image/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
                // 上传文件
                $info = $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                    foreach($info as $file){
                    $imageurl='/Uploads/Image/'.$file['savepath'].$file['savename'];
                    }
                }
            }
            $model = D("Picture");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                $category=I('category');
                $where['id']=intval(I('id'));
                $where['category']=$category;
                $date['intro']=I('intro');
                $date['imageURL']=$imageurl;
                //dump($where);
                //dump($date);
                if ($model->where($where)->save($date)) {
                    $this->success("更新成功", U('picture/index',array('category'=>$category)));
                } else {
                    $this->error("更新失败");
                }       
            }
        
        }
    }

    public function details(){
            $id = intval(I('id'));
            $category=iconv('gb2312','utf-8', I('category'));
            $where['id']=$id;
            $where['category']=$category;
            $model = M('picture')->where($where)->find();
            //dump($model);
            $this->assign('model',$model);
            $this->display();
    }

    /**
     * 删除图片
     * @param  [type] $id $category [description]
     * @return [type]     [description]
     */
    public function delete()
    {
    	$id = intval(I('id'));
        $category=iconv('gb2312','utf-8', I('category'));
        $where['id']=$id;
        $where['category']=$category;
        //dump($where);
        $model = M('picture');
        //查询status字段值
        $result = $model->where($where)->delete();
        if($result){
            $this->success("删除成功", U('picture/index',array('category'=>$category)));
        }else{
            $this->error("删除失败");
        }
    }
    
}