<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form action="__URL__/regpost" method="post">
        	用户<input type="text" name="username"><br>
			密码：<input type="text" name="password"><br>
			重复密码：<input type="text" name="repassword"><br>

        	邮箱<input type="text" name="email"><br>
			<input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>