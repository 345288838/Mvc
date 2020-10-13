<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 17:43:04
  from 'D:\WampSever\www\2006\mvc\application\template\admin\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6cdaa80f9e25_34345896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929ac41bd96221d789ce25e3f7ab59756e7586d7' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\upload.html',
      1 => 1600969377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6cdaa80f9e25_34345896 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/project.css">
</head>
<body style="margin: 0;padding: 0;background: none">
<div class="container" >
    <form action="/2006/mvc/index.php/admin/category/uploadfile" class="form-horizontal" method="post"
          enctype="multipart/form-data" style="width: 80%">
        <div class="form-group">
            <label for="file">文件上传</label>
            <input type="file" name="file" class="form-control" id="file">
        </div>
        <div class="form-group">
            <input type="submit" value="上传图片" class="btn btn-info">
        </div>
    </form>
</div>
</body>
</html><?php }
}
