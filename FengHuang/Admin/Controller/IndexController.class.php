<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $this->display();   
    }

     public function search(){
            $key=I('key');
           
            $where['title'] = array('like',"%$key%");
            $where['intro'] = array('like',"%$key%");
            $where['content'] = array('like',"%$key%");
            $where['_logic'] = 'or';
            $model = M('article')->where($where); 

            $article = $model->order('id ASC')->select();
            $this->assign('article', $article);
          
            $this->display();    
    }
}