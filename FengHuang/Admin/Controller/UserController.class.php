<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {
   /**
     * 用户列表
     * @return [type] [description]
     */
    public function index()
    {
        $model = M('user');  
        $member = $model->order('id ASC')->select();
        $this->assign('user', $member);
        $this->display();     
    }

    /**
     * 添加用户
     */
    public function add()
    {
        //默认显示添加表单
        if (!IS_POST) {
            $this->display();
        }
        if (IS_POST) {
            //如果用户提交数据
            $model = D("User");
            if (!$model->create()) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                $this->error($model->getError());
                exit();
            } else {
                if ($model->add()) {
                    $this->success("用户添加成功", U('user/index'));
                } else {
                    $this->error("用户添加失败");
                }
            }
        }
    }
    /**
     * 更新管理员信息
     * @param  [type] $id [管理员ID]
     * @return [type]     [description]
     */
    public function update()
    {
        //默认显示添加表单
        if (!IS_POST) {
            $model = M('user')->find(I('id',"addslashes"));
            $this->assign('model',$model);
            $this->display();
        }
        if (IS_POST) {
            $model = D("User");
            if (!$model->create()) {
                $this->error($model->getError());
            }else{
                //验证密码是否为空   
                $data = I();
                unset($data['password']);
                if(I('password') != ""){
                    $data['password'] = md5(I('password'));
                }
                //更新
                if ($model->save($data)) {
                    $this->success("用户信息更新成功", U('user/index'));
                } else {
                    $this->error("未做任何修改,用户信息更新失败");
                }        
            }
        }
    }
    /**
     * 删除管理员
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
    	$id = intval($id);
        $model = M('user');
        //查询status字段值
        $result = $model->where("id=%d",$id)->delete();
        if($result){
            $this->success("删除成功", U('user/index'));
        }else{
            $this->error("删除失败");
        }
    }
}