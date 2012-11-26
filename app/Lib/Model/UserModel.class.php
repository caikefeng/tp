<?php
    class UserModel extends Model{
        protected $_validate=array(
            array('username','require','用户名不可为空！'),
            array('password','require','密码不可为空！'),
            array('email','require','邮箱不可为空！'),
        );
    }
?>
