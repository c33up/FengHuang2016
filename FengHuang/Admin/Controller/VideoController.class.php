<?php
namespace Admin\Controller;
use Think\Controller;
class VideoController extends BaseController {
    public function index($key =""){
            //$category=I('category'); 
            //$where['category'] =  $category;
        if($key === ""){
 
  
        }else{
            $condition['title'] = array('like',"%$key%");
            $condition['intro'] = array('like',"%$key%");
            $condition['_logic'] = 'or';
            $where['_complex'] = $condition;
            
        } 
        $model = M('video'); 
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->parameter = $where;
        $show = $Page->show();// 分页显示输出
        $video = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
   
        $this->assign('video', $video);
        $this->assign('page',$show);
        $this->display();
    }

     public function add()
    {
         //默认显示添加表单
        if (!IS_POST) {
            
            //$time=date("Y-m-d h:i:sa");
            //echo $category;
            $time=date("Y-m-d\TH:i") ;
            $this->assign('time', $time);
            $this->display();
        }
        if (IS_POST) {
            $data=I('');
           
            if($data['flag']=='0'){
                if(empty($_FILES["imageURL"][tmp_name])){
                    $this->error("请上传图片");
                }else{
                    if(isset($_FILES['imageURL'])){
                        $upload = new \Think\Upload();// 实例化上传类
                        $upload->maxSize = 2147483648 ;// 设置附件上传大小
                        $upload->saveName ='time';
                        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                        $upload->rootPath = './Uploads/Video/'; // 设置附件上传根目录
                        $upload->savePath = ''; // 设置附件上传（子）目录
                        // 上传文件
                        $info = $upload->upload();
                        if(!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                        }else{// 上传成功 获取上传文件信息
                            foreach($info as $file){
                            $imgurl='/Uploads/Video/'.$file['savepath'].$file['savename'];
                            }
                        }
                    }
                }  
            }else{
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728000 ;// 设置附件上传大小
                $upload->saveName = 'time'; 
                $upload->rootPath = './Uploads/Video/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
           
                if(empty($_FILES["localvideo"][tmp_name])&&empty($_FILES["imageURL"][tmp_name])){
                    $this->error('请上传图片、视频');
                }else{
                        if(empty($_FILES["localvideo"][tmp_name])){
                                $this->error('请上传视频');
                        }else{
                            $upload->exts =array('mp4','wmv','avi','mpeg');
                            $info = $upload->uploadOne($_FILES["localvideo"]);
                            //dump($info);
                            if(!$info) {// 上传错误提示错误信息
                                $this->error($upload->getError());
                            }else{// 上传成功 获取上传文件信息
                            $data['videoURL']='/Uploads/Video/'.$info['savepath'].$info['savename'];
                            }
                        }

                        if(empty($_FILES["imageURL"][tmp_name])){
                                $this->error('请上传图片');
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


            }
         
            $model = M("video");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                 $ishome=I('ishome');
                 if($ishome=='on'){
                     $ishome='是';
                 }else{
                     $ishome='否';
                 }
                $category='31';
                $data['imageUrl']=$imgurl;
                $data['category']=$category;
                $data['ishome']=$ishome;
                //dump($date);
                if ($model->add($data)) {
                    $this->success("视频添加成功", U('video/index'));
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
            $category='31';
             
            $where['id']=$id;
            $where['category']=$category;
            $model = M('video')->where($where)->find();
            $model['createdate']=date("Y-m-d\TH:i",strtotime($model['createdate'])) ;
            
            $this->assign('model',$model);
            $this->display();

        }else{
            $data=I('');

            if($data['flag']=='0'){
                  $eximgurl=$data['eximg'];
                    if(empty($_FILES["imageURL"][tmp_name])){
                        $imageurl=$eximgurl;
                        unset($data['eximg']);
                    }else{
                         unset($data['eximg']);
                        $upload = new \Think\Upload();// 实例化上传类
                        $upload->maxSize = 2147483648 ;// 设置附件上传大小
                        $upload->saveName ='time';
                        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                        $upload->rootPath = './Uploads/Video/'; // 设置附件上传根目录
                        $upload->savePath = ''; // 设置附件上传（子）目录
                        // 上传文件
                        $info = $upload->upload();
                        if(!$info) {// 上传错误提示错误信息
                        $this->error($upload->getError());
                        }else{// 上传成功 获取上传文件信息
                            foreach($info as $file){
                            $imgurl='/Uploads/Video/'.$file['savepath'].$file['savename'];
                            }
                        }
                        if(file_exists('./'.$eximgurl)){
                            unlink('./'.$eximgurl);
                        }
                    }
            }else{
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728000 ;// 设置附件上传大小
                $upload->saveName = 'time'; 
                $upload->rootPath = './Uploads/Video/'; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
           
                if(empty($_FILES["localvideo"][tmp_name])&&empty($_FILES["imageURL"][tmp_name])){
                        $data['videoURL']=$data['exvideo'];
                        $imgurl=$data['eximg'];
                        unset($data['exvideo']);
                        unset($data['eximg']);
                }else{
                    if(empty($_FILES["localvideo"][tmp_name])){
                            $data['videoURL']=$data['exvideo'];
                            unset($data['exvideo']);
                    }else{
                        unset($data['exvideo']);
                        $upload->exts =array('mp4','wmv','avi','mpeg');
                        $info = $upload->uploadOne($_FILES["localvideo"]);
                        //dump($info);
                        if(!$info) {// 上传错误提示错误信息
                            $this->error($upload->getError());
                        }else{// 上传成功 获取上传文件信息
                        $data['videoURL']='/Uploads/Video/'.$info['savepath'].$info['savename'];
                        }
                    }

                    if(empty($_FILES["imageURL"][tmp_name])){
                            $imgurl=$data['eximg'];
                            unset($data['eximg']);
                    }else{
                        unset($data['eximg']);
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
            }
         
            $model = M("video");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                 $exishome=$data['exishome'];
                 $ishome=$data['ishome'];
                if($exishome=='是'){
                     
                     if($ishome=='on'){
                         $ishome='否';
                     }else{
                          $ishome='是';
                     }
                }else{
                     
                     if($ishome=='on'){
                         $ishome='是';
                     }else{
                         $ishome='否';
                     }
                }
                unset($data['exishome']);
        
                $where['id']=$data['id'];
                $where['category']=$data['category'];
           
                $data['imageUrl']=$imgurl;
                $data['ishome']=$ishome;
                //dump($where);
                //dump($data);
                if ($model->where($where)->save($data)) {
                    $this->success("视频更新成功", U('video/index'));
                } else {
                    $this->error("视频更新失败");
                }
            } 
         
         }
    }

    public function details(){
            $data=I('');
            $where['id']=$data['id'];
            $where['category']=$data['category'];
            $model = M('video')->where($where)->find();
            $videourl=htmlspecialchars_decode(html_entity_decode($model['videourl']));
            //dump($model);
            $model['videourl']=$videourl;
            //$this->assign('videourl',$videourl);
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
        $data=I('');
        $where['id']=$data['id'];
        $where['category']=$data['category'];
        //dump($where);
        $model = M('video');
        $list=$model->where($where)->find();
        //dump($list);
        if(file_exists('./'.$list['imageurl'])){
            unlink('./'.$list['imageurl']);
        }
        //查询status字段值
        $result = $model->where($where)->delete();
        if($result){
            $this->success("删除成功", U('video/index'));
        }else{
            $this->error("删除失败");
        }
    }
}