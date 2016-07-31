<?php
namespace Home\Controller;
use Think\Controller;
class ServiceController extends BaseController {
     public function index(){   
        $media=showServiceTwo('1');
        $public=showServiceTwo('2');
        $crisis=showServiceTwo('3');
        $advertisement=showServiceTwo('4');
        $web=showServiceTwo('5');
        $vi=showServiceTwo('6');
        $plan=showServiceTwo('7');

        $this->assign('media', $media);
        $this->assign('public', $public);
        $this->assign('crisis', $crisis);
        $this->assign('advertisement', $advertisement);
        $this->assign('web', $web);
        $this->assign('vi', $vi);
        $this->assign('plan', $plan);
        $this->display();     
    }

    public function service($key=""){ 
            $cid =I('cid');
            switch($cid){
           case '1':
               $category='媒体发布';
               break;
           case '2':
               $category='公关活动';
               break;
           case '3':
               $category='危机公关处理';
               break;
           case '4':
               $category='广告代理发布';
               break;
           case '5':
                $category='网络推广';
                break;
           case '6':
               $category='VI设计';
               break;
           case '7':
                $category='全案策划服务';
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
        $model = M('service')->where($where); 
        $count  = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $Page->parameter = $where;
        $show = $Page->show();// 分页显示输出
        $article = $model->limit($Page->firstRow.','.$Page->listRows)->where($where)->order('id ASC')->select();
        //dump($article);
        $this->assign('article', $article);
        $this->assign('page',$show);
         $this->assign('category',$category);
        //dump($show);
        $this->display();     
    }

     public function detail(){
            $id = intval(I('id'));
    
            $where['id']=$id;

            $model = M('service')->where($where)->find();
            //dump($model);
            $content=htmlspecialchars_decode(html_entity_decode($model['content']));

             M('service')->where($where)->setInc('num',1);  
             //dump($model);
             $this->assign('model',$model);
             $this->assign('content',$content);
             $this->display();
    }

}