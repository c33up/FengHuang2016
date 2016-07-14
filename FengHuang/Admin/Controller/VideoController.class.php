<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends BaseController {
    public function index(){
        $category=I('category');
        if($key === ""){
            $model = M('video');  
            $where['category'] = iconv('gb2312','utf-8', $category);
            // 把查询条件传入查询方法
            //$model=$User->where($where)->select();
        }else{
            $where['category'] = iconv('gb2312','utf-8', $category);
            $where['key'] = array('like',"%$key%");
            $where['_logic'] = 'or';
            $model = M('video')->where($where); 
        } 
        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Extend\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $video = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
        //dump($article);
        
        $this->assign('video', $video);
        $this->assign('category', iconv('gb2312','utf-8', $category));
        $this->assign('page',$show);
        $this->display();
    }

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
           dump(I('post.'));
             if(isset($_FILES['localvideo'])){
                $uploadvideo = new \Think\Upload();// 实例化上传类
                //$uploadvideo->maxSize = 3145728 ;// 设置附件上传大小
                $uploadvideo->saveName = array('date','Y-m-d h:i:s'); 
                $uploadvideo->exts = array('MP4', 'WebM', 'Ogg');// 设置附件上传类型
                $uploadvideo->rootPath = './Uploads/Video/'; // 设置附件上传根目录
                $uploadvideo->savePath = ''; // 设置附件上传（子）目录
                // 上传文件
                $videoinfo = $uploadvideo->upload();
                if(!$videoinfo) {// 上传错误提示错误信息
                $this->error($uploadvideo->getError());
                }else{// 上传成功 获取上传文件信息
                    foreach($videoinfo as $file){
                    $localvideo='/Uploads/'.$file['savepath'].$file['savename'];
                    }
                }
            }
            echo $localvideo;
         }
    }
}