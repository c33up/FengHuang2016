<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {
    public function _initialize(){
        header("Content-type:text/html;charset=utf-8");
          //轮播
        $picture=showPicture();
        $this->assign('picture',$picture);   
    }

}