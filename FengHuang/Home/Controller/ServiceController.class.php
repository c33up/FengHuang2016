<?php
namespace Home\Controller;
use Think\Controller;
class ServiceController extends BaseController {
     public function index(){   
        $media=showServiceTwo('21');
        $public=showServiceTwo('22');
        $crisis=showServiceTwo('23');
        $advertisement=showServiceTwo('24');
        $web=showServiceTwo('25');
        $vi=showServiceTwo('26');
        $plan=showServiceTwo('27');

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
           case '21':
               $category='媒体发布';
               break;
           case '22':
               $category='公关活动';
               break;
           case '23':
               $category='危机公关处理';
               break;
           case '24':
               $category='广告代理发布';
               break;
           case '25':
                $category='网络推广';
                break;
           case '26':
               $category='VI设计';
               break;
           case '27':
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
    
            $where['id']=$id;

            $model = M('article')->where($where)->find();
            //dump($model);
            $content=htmlspecialchars_decode(html_entity_decode($model['content']));

             M('article')->where($where)->setInc('num',1);  
             //dump($model);
             $this->assign('model',$model);
             $this->assign('content',$content);
             $this->display();
    }

}