<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){
        echo I('category');
       // $this->display();
    }

}