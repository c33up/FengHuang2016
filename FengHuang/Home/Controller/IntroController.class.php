<?php
namespace Home\Controller;
use Think\Controller;
class IntroController extends BaseController {
    public function index(){   
 
        $cid=I('cid'); 
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
     
        $article = $model->where($where)->find();
        $content=htmlspecialchars_decode(html_entity_decode($article['content']));
        
        $this->assign('content', $content);
        $this->assign('category',$category);
        $this->display();   
    }
    
}