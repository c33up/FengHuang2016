<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller {
    public function _initialize(){
        header("Content-type:text/html;charset=utf-8");
        $sid = session('adminId');
        //判断用户是否登陆
        if(!isset($sid ) ) {
            redirect(U('Login/index'));
        }
    }

}