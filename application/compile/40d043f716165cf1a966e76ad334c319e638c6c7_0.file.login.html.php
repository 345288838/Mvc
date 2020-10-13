<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 11:54:51
  from 'D:\WampSever\www\2006\mvc\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f58c28bdbbdf5_48477183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d043f716165cf1a966e76ad334c319e638c6c7' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\login.html',
      1 => 1599652486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58c28bdbbdf5_48477183 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal" action="admin/index/login" method="post">
    <h1>欢迎来到XX后台管理中心</h1>
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
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="inputText3" class="col-sm-2 control-label" >验证码</label>
        <div class="col-sm-10">
            <input type="text" id="inputText3" name="code" class="form-control" placeholder="请输入验证码" style="width: 120px;float: left;margin-right: 24px;">
            <img src="http://localhost/2006/mvc/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/2006/mvc/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer;width: 130px;float: left">
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
            <button type="submit" class="btn btn-default login">登录</button>
            <a href="/2006/mvc//index.php/admin/reg/add" class="btn btn-default reg">注册</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
