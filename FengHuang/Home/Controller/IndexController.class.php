<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){

        //轮播
        //$picture=showPicture();
        //dump($picture);
        
        //方法论
        $article=showAriticle();

        //视频
        $video=showVideo();

        //案例
        $case=showCase();

        //$this->assign('picture',$picture);
        $this->assign('article',$article);
        $this->assign('video',$video);
        $this->assign('case',$case);
        //dump($video);
        $this->display();     
    }
}