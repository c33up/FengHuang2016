<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){

        $a['category']="烽凰方法论";
        $article=showAriticle($a);

        $toWhewe['category']="二维码";
        $twoCode=showTwoDimensionCode($toWhewe);

        $video=showVideo();
        $this->assign('picture',$picture);
        $this->assign('article',$article);
        $this->assign('twoCode',$twoCode);
         $this->assign('video',$video);
        //dump($video);
        $this->display();     
    }
}