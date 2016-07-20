<?php
namespace Admin\Controller;
use Think\Controller;
class IntroController extends BaseController {
    public function index(){   
 
        $category=iconv('gb2312','utf-8',I('category')); 
        $where['category'] =  $category;
          
        $model = M('intro');  
 
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $article = $model->where($where)->find();
        $content=htmlspecialchars_decode(html_entity_decode($article['content']));
        $this->assign('count', $count);
        $this->assign('content', $content);
        $this->assign('article', $article);
        $this->assign('category',$category);
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
           
            $model = M("intro");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                //dump($date);
                if ($model->add()) {
                    $this->success("添加成功", U('intro/index',array('category'=>$category)));
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
            $category=iconv('gb2312','utf-8', I('category'));
            $where['id']=$id;
            $where['category']=$category;
            $model = M('intro')->where($where)->find();
            //dump($model);
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