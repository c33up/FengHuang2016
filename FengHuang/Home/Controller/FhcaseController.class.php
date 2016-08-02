<?php
namespace Home\Controller;
use Think\Controller;
class FhcaseController extends BaseController {
     public function index(){   
        $new=showCaseTwo('14');
        $public=showCaseTwo('11');
        $entertainment=showCaseTwo('15');
        $event=showCaseTwo('12');
        $crisis=showCaseTwo('13');

        $this->assign('new', $new);
        $this->assign('public', $public);
        $this->assign('entertainment', $entertainment);
        $this->assign('event', $event);
        $this->assign('crisis', $crisis);
        $this->display();     
    }

    public function fhcase($key=""){ 
            $cid =I('cid');
            switch($cid){
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
           default:
                 //$this->error("跳转失败");
       }
          
        $where['category']=$cid;
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
        $article = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id DESC')->select();
        //dump($article);
        $this->assign('article', $article);
        $this->assign('page',$show);
         $this->assign('category',$category);
        //dump($show);
        $this->display();     
    }

     public function detail(){
            $id = intval(I('id'));
            $cid =I('cid');
            $where['id']=$id;
            $where['category']=$cid;
            $model = M('article')->where($where)->find();
            //dump($model);
            $content=htmlspecialchars_decode(html_entity_decode($model['content']));

             M('article')->where($where)->setInc('num',1);  

            $this->assign('model',$model);
            $this->assign('content',$content);
            $this->display();
    }

}