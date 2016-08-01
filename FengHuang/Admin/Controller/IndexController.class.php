<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $this->display();   
    }

     public function search($key=""){
          
           if($key === ""){
               $model = M('article');
           }else{
                $where['title'] = array('like',"%$key%");
                $where['intro'] = array('like',"%$key%");
                $where['content'] = array('like',"%$key%");
                $where['_logic'] = 'or';
                $model = M('article')->where($where);

           }
          
            $count  = $model->where($where)->count();// 查询满足要求的总记录数
            $Page = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(10)
            $Page->parameter = $where;
            $show = $Page->show();// 分页显示输出
            $article = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();

            //$article = $model->order('id ASC')->select();
            $this->assign('article', $article);
            $this->assign('page',$show);
            $this->display();    
    }
}