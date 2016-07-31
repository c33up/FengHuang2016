<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends BaseController {
     public function index($key=""){   
         
        if($key === ""){
            
        }else{
            $condition['title'] = array('like',"%$key%");
            $condition['intro'] = array('like',"%$key%");
            $condition['_logic'] = 'or';
            $where['_complex']=$condition;
        } 
        $model = M('video')->where($where); 
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(10)
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
            $model = M('video')->where($where)->find();
            //dump($model);
            if($model['category']=='1'){
                $videourl=htmlspecialchars_decode(html_entity_decode($model['videourl']));
                $this->assign('videourl',$videourl);
            }
            

             M('video')->where($where)->setInc('num',1);  

            $this->assign('model',$model);
          
            $this->display();
    }

}