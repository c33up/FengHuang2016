<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends BaseController {
    public function index($key =""){
   
        if($key === ""){
             if (IS_POST) {
                $category=I('category'); 
                $where['category'] =  $category;
            } else{
                $category=iconv('gb2312','utf-8',I('category')); 
                $where['category'] =  $category;
            }
            $model = M('video');  
  
        }else{
            $category=I('category'); 
            $where['category'] =  $category;
            $condition['title'] = array('like',"%$key%");
            $condition['intro'] = array('like',"%$key%");
            $condition['_logic'] = 'or';
            $where['_complex'] = $condition;
            $model = M('video')->where($where); 
        } 
        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->parameter = $where;
        $show = $Page->show();// 分页显示输出
        $video = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
        $this->assign('video', $video);
        $this->assign('category', $category);
        $this->assign('page',$show);
        $this->display();
    }

     public function add()
    {
         //默认显示添加表单
        if (!IS_POST) {
            $category=I('category');
            $time=date("Y-m-d h:i:sa");
            //echo $category;
            $this->assign('category', iconv('gb2312','utf-8', $category));
            $this->assign('time', $time);
            $this->display();
        }
        if (IS_POST) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728000 ;// 设置附件上传大小
            $upload->saveName = 'time'; 
            $upload->rootPath = './Uploads/Video/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            if(empty($_FILES["localvideo"][tmp_name])||empty($_FILES["imageURL"][tmp_name])){
                if(empty($_FILES["localvideo"][tmp_name])&&empty($_FILES["imageURL"][tmp_name])){
                    $this->error('请上传图片');
                }else{
                    if(!empty($_FILES["localvideo"][tmp_name])){
                        $upload->exts =array('mp4','wmv','avi');
                        $info = $upload->uploadOne($_FILES["localvideo"]);
                        //dump($info);
                        if(!$info) {// 上传错误提示错误信息
                            $this->error($upload->getError());
                        }else{// 上传成功 获取上传文件信息
                        $localvideo='/Uploads/Video/'.$info['savepath'].$info['savename'];
                        }
                    }else if(!empty($_FILES["imageURL"][tmp_name])){
                        $upload->exts =array('jpg', 'gif', 'png', 'jpeg');
                        $info = $upload->uploadOne($_FILES["imageURL"]);
                        //dump($info);
                        if(!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                        }else{// 上传成功 获取上传文件信息
                        $imgurl='/Uploads/Video/'.$info['savepath'].$info['savename'];
                        }
                    }
                }
                     
            }else{
                $upload->exts =array('jpg', 'gif', 'png', 'jpeg','mp4','wmv','avi');
                $info = $upload->upload();
                //dump($info);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                $localvideo='/Uploads/Video/'.$info['localvideo']['savepath'].$info['localvideo']['savename'];
                $imgurl='/Uploads/Video/'.$info['imageURL']['savepath'].$info['imageURL']['savename'];
                }
            }   
            $model = M("video");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                $category=I('category');
                $date['title']=I('title');
                $date['intro']=I('intro');
                $date['videoURL']=I('videoURL');
                $date['localVideo']=$localvideo;
                $date['imageUrl']=$imgurl;
                $date['category']=$category;
                //dump($date);
                if ($model->add($date)) {
                    $this->success("视频添加成功", U('video/index',array('category'=>$category)));
                } else {
                    $this->error("视频添加失败");
                }
            } 
         
         }
    }


    /**
     * 更新视频信息
     * @param  [type] $id $category [文章ID]
     * @return [type]     [description]
     */
    public function update()
    {
         //默认显示添加表单
        if (!IS_POST) {
            $id = intval(I('id'));
            $category=iconv('gb2312','utf-8', I('category'));
            $time=date("Y-m-d h:i:sa");
            $where['id']=$id;
            $where['category']=$category;
            $model = M('video')->where($where)->find();
            $this->assign('time',$time);
            $this->assign('model',$model);
            $this->display();

        }
        if (IS_POST) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728000 ;// 设置附件上传大小
            $upload->saveName = 'time'; 
            $upload->rootPath = './Uploads/Video/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            if(empty($_FILES["localvideo"][tmp_name])||empty($_FILES["imageURL"][tmp_name])){
                if(empty($_FILES["localvideo"][tmp_name])&&empty($_FILES["imageURL"][tmp_name])){
                      $localvideo=I('exvideo');
                      $imgurl=I('eximg');
                }else{
                    if(empty($_FILES["localvideo"][tmp_name])){
                         $localvideo=I('exvideo');
                    }else{
                        $upload->exts =array('mp4','wmv','avi','mpeg');
                        $info = $upload->uploadOne($_FILES["localvideo"]);
                        //dump($info);
                        if(!$info) {// 上传错误提示错误信息
                            $this->error($upload->getError());
                        }else{// 上传成功 获取上传文件信息
                        $localvideo='/Uploads/Video/'.$info['savepath'].$info['savename'];
                        }
                    }

                    if(empty($_FILES["imageURL"][tmp_name])){
                         $imgurl=I('eximg');
                    }else{
                        $upload->exts =array('jpg', 'gif', 'png', 'jpeg');
                        $info = $upload->uploadOne($_FILES["imageURL"]);
                        //dump($info);
                        if(!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                        }else{// 上传成功 获取上传文件信息
                        $imgurl='/Uploads/Video/'.$info['savepath'].$info['savename'];
                        }
                    }
                }
            }else{
                $upload->exts =array('jpg', 'gif', 'png', 'jpeg','mp4','wmv','avi');
                $info = $upload->upload();
                //dump($info);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功 获取上传文件信息
                $localvideo='/Uploads/Video/'.$info['localvideo']['savepath'].$info['localvideo']['savename'];
                $imgurl='/Uploads/Video/'.$info['imageURL']['savepath'].$info['imageURL']['savename'];
                }
            }   
            $model = M("video");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                $id = intval(I('id'));
                $category=I('category');
                $where['id']=$id;
                $where['category']=$category;
                $date['title']=I('title');
                $date['intro']=I('intro');
                $date['videoURL']=I('videoURL');
                $date['localVideo']=$localvideo;
                $date['imageUrl']=$imgurl;
                //dump($where);
                //dump($date);
                if ($model->where($where)->save($date)) {
                    $this->success("视频添加成功", U('video/index',array('category'=>$category)));
                } else {
                    $this->error("视频添加失败");
                }
            } 
         
         }
    }

    public function details(){
            $id = intval(I('id'));
            $category=iconv('gb2312','utf-8', I('category'));
            $where['id']=$id;
            $where['category']=$category;
            $model = M('video')->where($where)->find();
            //dump($model);
            $this->assign('model',$model);
            $this->display();
    }

    /**
     * 删除视频
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
        $model = M('video');
        //查询status字段值
        $result = $model->where($where)->delete();
        if($result){
            $this->success("删除成功", U('video/index',array('category'=>$category)));
        }else{
            $this->error("删除失败");
        }
    }
}