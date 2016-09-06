<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends BaseController {
     public function index(){   
         $data=I('');
        $model = M('video'); 
        $count  = $model->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $Page->parameter = $data;
        $show = $Page->show();// 分页显示输出
        $article = $model->limit($Page->firstRow.','.$Page->listRows)->order('id DESC')->select();
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
            M('video')->where($where)->setInc('num',1);  
            if($model['flag']=='0'){
                $model['videourl']=htmlspecialchars_decode(html_entity_decode($model['videourl']));
                //$this->assign('videourl',$videourl);
            }
            $this->assign('model',$model);
          
            $this->display();
    }

}