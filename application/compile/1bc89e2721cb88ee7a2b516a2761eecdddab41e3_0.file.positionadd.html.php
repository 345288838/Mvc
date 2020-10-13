<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 16:23:43
  from 'D:\WampSever\www\2006\mvc\application\template\admin\positionadd.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e198fd86ff2_61261567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bc89e2721cb88ee7a2b516a2761eecdddab41e3' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\positionadd.html',
      1 => 1601051020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e198fd86ff2_61261567 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body style="background: none">
<div class="container" style="padding: 5%">
    <form action="/2006/mvc/index.php/admin/position/addCon" class="form-horizontal">
        <div class="form-group">
            <label for="posname">推荐位名称</label>
            <input type="text" class="form-control" id="posname" name="posname" placeholder="推荐位名称">
        </div>
        <div class="form-group">
            <label for="posinfo">推荐位描述</label>
            <textarea class="form-control" id="posinfo" name="posinfo" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="提交">
        </div>

    </form>
</div>
</body>
</html><?php }
}
