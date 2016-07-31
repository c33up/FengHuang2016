<?php
namespace Admin\Controller;
use Think\Controller;
class ContactController extends BaseController {
    public function index(){
        $model = M('contact');  
        $contact=$model->find();
        //dump($contact);
        $count=count($contact);
        $this->assign('contact', $contact);
        $this->assign('count', $count);
        $this->display();     
    }
    //保存上传配置
    public function add()
    {
         //默认显示添加表单
        if (!IS_POST) {
            $this->display();
        }
        if (IS_POST) {
            $model = M("contact");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                if ($model->add()) {
                    $this->success("添加成功", U('contact/index'));
                } else {
                    $this->error("添加失败");
                }
            } 
         }
    }


        /**
     * 更新图片信息
     * @param  [type] $id [文章ID]
     * @return [type]     [description]
     */
    public function update()
    {
    	
        //默认显示添加表单
        if (!IS_POST) {
            $model = M('contact')->find();
            //dump($model);
            $this->assign('model',$model);
            $this->display();
        }
        if (IS_POST) {
            $model = D("Contact");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                $data['address'] =I('address');
                $data['fax'] =I('fax');
                $data['telphone'] =I('telphone');
                $data['email'] =I('email');
                $data['qq'] =I('qq');
                $where['id']='1';
                if ($model->where($where)->save($data)) {
                    $this->success("更新成功", U('contact/index'));
                } else {
                    $this->error("更新失败");
                }       
            }
        
        }
    }
}