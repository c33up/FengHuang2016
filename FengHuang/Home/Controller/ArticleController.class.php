<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends BaseController {
     public function index($key=""){   
          $where['category'] = '0';
        if($key === ""){
            
        }else{
            $condition['title'] = array('like',"%$key%");
            $condition['intro'] = array('like',"%$key%");
            $condition['content'] = array('like',"%$key%");
            $condition['_logic'] = 'or';
            $where['_complex']=$condition;
        } 
        $model = M('article')->where($where); 
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $Page->parameter = $where;
        $show = $Page->show();// 分页显示输出
        $article = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
        //dump($article);
        $this->assign('article', $article);
        $this->assign('page',$show);
        //dump($show);
        $this->display();     
    }

     public function detail(){
            $id = intval(I('id'));
            $where['id']=$id;
            $model = M('article')->where($where)->find();
            //dump($model);
            $content=htmlspecialchars_decode(html_entity_decode($model['content']));

             M('article')->where($where)->setInc('num',1);  

            $this->assign('model',$model);
            $this->assign('content',$content);
            $this->display();
    }

}