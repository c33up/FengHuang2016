<?php
namespace Admin\Model;
use Think\Model;
class PictureModel extends Model{
    protected $_validate = array(
        array('imageURL','require','请上传图片！'), //默认情况下用正则进行验证
    );
    protected $_auto = array(
        array('createDate','time',1,'function'), //新增时
    );
}
?>
