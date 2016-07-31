<?php
namespace Admin\Controller;
use Think\Controller;
class IntroController extends BaseController {
    public function index(){   
 
        $cid=I('category'); 
        $where['category'] =  $cid;
          
        $model = M('intro');  
        switch($cid){
            case '1':
             $category='烽凰简介'; 
             break;
            case '2':
             $category='烽凰团队'; 
             break;
            default:
             
        }
        $count  = $model->where($where)->count();
        $article = $model->where($where)->find();
        $content=htmlspecialchars_decode(html_entity_decode($article['content']));
         $this->assign('count', $count);
        $this->assign('content', $content);
        $this->assign('article', $article);
         $this->assign('cid',$cid);
        $this->assign('category',$category);
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
                case '1':
                 $category='烽凰简介'; 
                 break;
                case '2':
                 $category='烽凰团队'; 
                 break;
                default:
            }
           
            $this->assign('cid',$cid);
            $this->assign('category',$category);
            $this->assign('time', $time);
            $this->display();
        }
        if (IS_POST) {
           
            $model = M("intro");
            //dump(I(''));
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                //dump($date);
                if ($model->add()) {
                    $this->success("添加成功", U('intro/index',array('category'=>$cid)));
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
    	
        //默认显示添加表单
        if (!IS_POST) {
            $time=date("Y-m-d h:i:sa");
            $id = intval(I('id'));
            $cid=I('category');
            $where['id']=$id;
            $where['category']=$cid;
            $model = M('intro')->where($where)->find();
            switch($cid){
                case '1':
                 $category='烽凰简介'; 
                 break;
                case '2':
                 $category='烽凰团队'; 
                 break;
                default:
            }
            //dump($model);
            $this->assign('category',$category);
            $this->assign('model',$model);
            $this->assign('time',$time);
            $this->display();
        }
        if (IS_POST) {
            
            $model = D("Intro");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                $category=I('category');
                $where['id']=intval(I('id'));
                $where['category']=$category;
               
                if ($model->where($where)->save()) {
                    $this->success("更新成功", U('intro/index',array('category'=>$category)));
                } else {
                    $this->error("更新失败");
                }       
            }
        
        }
    }
    
}