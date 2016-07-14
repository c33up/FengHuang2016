<?php
namespace Admin\Model;
use Think\Model;
class PictureModel extends Model{
    protected $_auto = array(
        array('createDate','time',1,'function'), //新增时
    );
}
?>
