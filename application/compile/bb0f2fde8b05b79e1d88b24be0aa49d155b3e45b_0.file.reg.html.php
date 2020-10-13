<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 12:56:57
  from 'D:\WampSever\www\2006\mvc\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f562e19b315f0_75909192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb0f2fde8b05b79e1d88b24be0aa49d155b3e45b' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\reg.html',
      1 => 1599483416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f562e19b315f0_75909192 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<form class="form-horizontal" id="reg" action="/2006/mvc/index.php/admin/reg/addUser" method="post" >
    <h1>注册页面</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword4" class="col-sm-2 control-label repass">确认密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword4" placeholder="确认密码" name="pass1">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="">
            <button type="submit" class="btn btn-default reg">注册</button>
            <a href="/2006/mvc//index.php/admin" class="btn btn-default login">登录</a>
        </div>
    </div>
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
reg.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
