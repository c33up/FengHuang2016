<?php
namespace Test\Controller;
use Think\Controller;
class ContactController extends Controller {
    public function index(){
        $where['category']="轮播图片";
        $picture=showTwoDimensionCode($where);;
        //dump($picture);
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