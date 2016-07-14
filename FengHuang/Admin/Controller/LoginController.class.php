<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }

     //登陆验证
    public function login(){
         if(!IS_POST)$this->error("非法请求");
        $member = M('user');
        $username =I('username','','addslashes');
        $password =I('password','','md5');
       
        //验证账号密码是否正确
        $user = $member->where("username = '%s' and password= '%s'",array($username,$password))->find();

        if(!$user) {
            $this->error('账号或密码错误') ;
        }
        
        //验证是否为管理员
        //更新登陆信息
        $data =array(
            'id' => $user['id'],
            'update_at' => time(),
            'login_ip' => get_client_ip(),
        );
        
        //如果数据更新成功  跳转到后台主页
        if($member->save($data)){
            session('adminId',$user['id']);
            session('username',$user['username']);
            $this->success("登陆成功",U('Index/index'));
        }
        //定向之后台主页
        
    }
   
    public function logout(){
        session('adminId',null);
        session('username',null);
        redirect(U('Login/index'));
    }
}