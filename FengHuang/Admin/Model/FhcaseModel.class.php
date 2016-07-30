<?php
namespace Admin\Model;
use Think\Model;
class FhcaseModel extends Model{
    protected $_validate = array(
        array('title','require','请填写标题！'), //默认情况下用正则进行验证
        array('content','require','请填写文章内容！'),
    );
}
?>
