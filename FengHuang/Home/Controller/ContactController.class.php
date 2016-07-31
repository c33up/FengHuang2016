<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends BaseController {
    public function index(){   
        $model = M('contact');  
        $contact=$model->find();
        //dump($contact);
        $this->assign('contact', $contact);
        $this->display();
    }
    
}