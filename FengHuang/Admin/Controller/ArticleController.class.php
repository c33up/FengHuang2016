<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index($key=""){  
          $cid=I('category'); 
          $where['category'] = $cid;
          switch($cid){
            case '0':
            $category='烽凰方法论';
            break;
           case '11':
               $category='公益营销';
               break;
           case '12':
               $category='事件营销';
               break;
           case '13':
               $category='危机公关';
               break;
           case '14':
               $category='新闻营销';
               break;
           case '15':
                $category='娱乐文化营销';
                break;
           case '21':
               $category='媒体发布';
               break;
           case '22':
               $category='公关活动';
               break;
           case '23':
               $category='危机公关处理';
               break;
           case '24':
               $category='广告代理发布';
               break;
           case '25':
                $category='网络推广';
                break;
           case '26':
               $category='VI设计';
               break;
           case '27':
                $category='全案策划服务';
                break;
           default:
                 //$this->error("跳转失败");
       }
        if($key === ""){
         
            $model = M('article');  
            
        }else{
         
            $condition['title'] = array('like',"%$key%");
            $condition['intro'] = array('like',"%$key%");
            $condition['content'] = array('like',"%$key%");
            $condition['_logic'] = 'or';
            $where['_complex']=$condition;
            $model = M('article')->where($where); 
        } 
        
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $Page->parameter = $where;
        $show = $Page->show();// 分页显示输出
        $article = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
        //dump($article);
        $this->assign('article', $article);
        $this->assign('page',$show);
        $this->assign('cid',$cid);
        $this->assign('category',$category);
        //dump($show);
        $this->display();     
    }
    //保存上传配置
    public function add()
    {
         $cid=I('category');
         $time=date("Y-m-d h:i:sa");
         //默认显示添加表单
        if (!IS_POST) {
            switch($cid){
            case '0':
            $category='烽凰方法论';
            break;
           case '11':
               $category='公益营销';
               break;
           case '12':
               $category='事件营销';
               break;
           case '13':
               $category='危机公关';
               break;
           case '14':
               $category='新闻营销';
               break;
           case '15':
                $category='娱乐文化营销';
                break;
           case '21':
               $category='媒体发布';
               break;
           case '22':
               $category='公关活动';
               break;
           case '23':
               $category='危机公关处理';
               break;
           case '24':
               $category='广告代理发布';
               break;
           case '25':
                $category='网络推广';
                break;
           case '26':
               $category='VI设计';
               break;
           case '27':
                $category='全案策划服务';
                break;
           default:
                 //$this->error("跳转失败");
       }
            //echo $category;
            $this->assign('category',$category);
            $this->assign('cid',$cid);
            $this->assign('time', $time);
            $this->display();
        }
        if (IS_POST) {
            if(empty($_FILES["imageURL"][tmp_name])){
                //$this->error("请上传图片");
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
            $model = M("article");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                $ishome=I('ishome');
                 if($ishome=='on'){
                     $ishome='yes';
                 }else{
                     $ishome='no';
                 }
                $date['title']=I('title');
                $date['intro']=I('intro');
                $date['content']=I('content');
                $date['imageURL']=$imageurl;
                $date['category']=$cid;
                $date['ishome']=$ishome;
                //dump($date);
                if ($model->add($date)) {
                    $this->success("添加成功", U('article/index',array('category'=>$cid)));
                } else {
                    $this->error("添加失败");
                }
            } 
         }
    }


        /**
     * 更新文章
     * @param  [type] $id [文章ID]
     * @return [type]     [description]
     */
    public function update()
    {
    	    $id = intval(I('id'));
            $cid=I('category');
        //默认显示添加表单
        if (!IS_POST) {
            $time=date("Y-m-d h:i:sa");

            $where['id']=$id;
            $where['category']=$cid;
            $model = M('article')->where($where)->find();
            //dump($model);
             switch($cid){
            case '0':
            $category='烽凰方法论';
            break;
           case '11':
               $category='公益营销';
               break;
           case '12':
               $category='事件营销';
               break;
           case '13':
               $category='危机公关';
               break;
           case '14':
               $category='新闻营销';
               break;
           case '15':
                $category='娱乐文化营销';
                break;
           case '21':
               $category='媒体发布';
               break;
           case '22':
               $category='公关活动';
               break;
           case '23':
               $category='危机公关处理';
               break;
           case '24':
               $category='广告代理发布';
               break;
           case '25':
                $category='网络推广';
                break;
           case '26':
               $category='VI设计';
               break;
           case '27':
                $category='全案策划服务';
                break;
           default:
                 //$this->error("跳转失败");
       }
            $this->assign('model',$model);
            $this->assign('category',$category);
            $this->assign('time',$time);
            $this->display();
        }
        if (IS_POST) {
                $eximgurl=I('eximageURL');
            if(empty($_FILES["imageURL"][tmp_name])){
                $imageurl=$eximgurl;
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
                if(file_exists('./'.$eximgurl)){
                    unlink('./'.$eximgurl);
                }
            }
            $model = D("Article");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                $exishome=I('exishome');
                if($exishome=='yes'){
                     $ishome=I('ishome');
                     if($ishome=='on'){
                         $ishome='no';
                     }else{
                          $ishome='yes';
                     }
                }else{
                     $ishome=I('ishome');
                     if($ishome=='on'){
                         $ishome='yes';
                     }else{
                         $ishome='no';
                     }
                }
               
                $where['id']=$id;
                $where['category']=$cid;
                $date['title']=I('title');
                $date['intro']=I('intro');
                $date['content']=I('content');
                $date['imageURL']=$imageurl;
                $date['ishome']=$ishome;
                //dump($date);
                if ($model->where($where)->save($date)) {
                    $this->success("更新成功", U('article/index',array('category'=>$cid)));
                } else {
                    $this->error("更新失败");
                }       
            }
        
        }
    }

    public function details(){
            $id = intval(I('id'));
            $cid=I('category');
            $where['id']=$id;
            $where['category']=$cid;
            $model = M('article')->where($where)->find();
            //dump($model);
              switch($cid){
            case '0':
            $category='烽凰方法论';
            break;
           case '11':
               $category='公益营销';
               break;
           case '12':
               $category='事件营销';
               break;
           case '13':
               $category='危机公关';
               break;
           case '14':
               $category='新闻营销';
               break;
           case '15':
                $category='娱乐文化营销';
                break;
           case '21':
               $category='媒体发布';
               break;
           case '22':
               $category='公关活动';
               break;
           case '23':
               $category='危机公关处理';
               break;
           case '24':
               $category='广告代理发布';
               break;
           case '25':
                $category='网络推广';
                break;
           case '26':
               $category='VI设计';
               break;
           case '27':
                $category='全案策划服务';
                break;
           default:
                 //$this->error("跳转失败");
       }
            $content=htmlspecialchars_decode(html_entity_decode($model['content']));
            $this->assign('model',$model);
            $this->assign('category',$category);
            $this->assign('content',$content);
            $this->display();
    }

    /**
     * 删除文章
     * @param  [type] $id $category [description]
     * @return [type]     [description]
     */
    public function delete()
    {
    	$id = intval(I('id'));
        $category=I('category');
        $where['id']=$id;
        $where['category']=$category;
        //dump($where);
        $model = M('article');
        $list=$model->where($where)->find();
        //dump($list);
        if(file_exists('./'.$list['imageurl'])){
            unlink('./'.$list['imageurl']);
        }
        //查询status字段值
        $result = $model->where($where)->delete();
        if($result){
            $this->success("删除成功", U('article/index',array('category'=>$category)));
        }else{
            $this->error("删除失败");
        }
    }
    
}