<?php
namespace Admin\Controller;
use Think\Controller;
class PictureController extends BaseController {
    public function index($key=""){
  
        if($key === ""){           
        }else{
            $where['intro'] = array('like',"%$key%");              
        } 
        $model = M('picture')->where($where);   
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->parameter = $where;
        $show = $Page->show();// 分页显示输出
        $picture = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
        
        $this->assign('picture', $picture);
        $this->assign('page',$show);
        $this->display();     
    }

    //保存上传配置
    public function add()
    {

         $time=date("Y-m-d h:i:sa");
         //默认显示添加表单
        if (!IS_POST) {

        
            $this->assign('time', $time);
            $this->display();
        }
        if (IS_POST) {
            if(empty($_FILES["imageURL"][tmp_name])){
                $this->error("请上传图片");
            }else{
            if(isset($_FILES['imageURL'])){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 2147483648 ;// 设置附件上传大小
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
             
                if ($model->add($date)) {
                    $this->success("图片添加成功", U('picture/index'));
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
            $where['id']=$id;
            $model = M('picture')->where($where)->find();
            //dump($model);
            $this->assign('model',$model);
            $this->display();
        }else{
            $data=I('');
    
            if(empty($_FILES["imageURL"][tmp_name])){
                $data['imageURL']=$data['eximageURL'];
                unset($data['eximageURL']);
            }else{
                   
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 2147483648 ;// 设置附件上传大小
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
                   $data['imageURL']='/Uploads/Image/'.$file['savepath'].$file['savename'];
                    }
                }
                if(file_exists('./'.$data['eximageURL'])){
                    unlink('./'.$data['eximageURL']);
                }
                 unset($data['eximageURL']);
            }
            $model = D("Picture");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                $where['id']=intval(I('id'));
  
                //dump($where);
               // dump($data);
                if ($model->where($where)->save($data)) {
                    $this->success("更新成功", U('picture/index'));
                } else {
                    $this->error("更新失败");
                }       
            }
         
        }
    }

    public function details(){
            $id = intval(I('id'));
           
            $where['id']=$id;
           
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
       
        $where['id']=$id;
       
        //dump($where);
        $model = M('picture');
        $list=$model->where($where)->find();
        //dump($list);
        if(file_exists('./'.$list['imageurl'])){
            unlink('./'.$list['imageurl']);
        }
        //查询status字段值
        $result = $model->where($where)->delete();
        if($result){
            $this->success("删除成功", U('picture/index'));
        }else{
            $this->error("删除失败");
        }
    }
    
}