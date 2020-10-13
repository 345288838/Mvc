<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 18:24:33
  from 'D:\WampSever\www\2006\mvc\application\template\admin\addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6ce4612d8fc8_62431983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '922b9ff58345e1950096a999e58a3f4ec1cbac93' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\addpage.html',
      1 => 1600971783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6ce4612d8fc8_62431983 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addpage</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
</head>
<body style="background: none">
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<div class="container" style="padding: 3%">
    <form action="/2006/mvc/index.php/admin/category/add" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="cname">栏目名称</label>
            <input type="text" placeholder="添加一级栏目" name="cname"
                   class="form-control" id="cname">
        </div>

        <div class="form-group">
            <label for="isshow">是否可见</label>
            <select name="isshow" id="" class="form-control" id="isshow">
                <option value="1">在导航可见</option>
                <option value="0">在导航不可见</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tpl_name">模板名称</label>
            <input type="text" name="tpl_name" placeholder="输入对应的模板"
                   class="form-control" id="tpl_name">
        </div>

        <div class="form-group">
            <label for="upload">文件上传</label>
            <div class="upload" id="upload"></div>
            <input type="hidden" value="hidden" name="imgurl">
        </div>

        <div class="form-group">
            <label for="info">描述</label>
            <textarea class="form-control" name="info" id="info" rows="10"></textarea>
        </div>



        <div class="form-group">
        <input type="submit" value="添加" class="btn btn-info">
        </div>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.multiple=true;
    uploadObj.createView({
        parent:document.querySelector(".upload")
    })
    uploadObj.up("/2006/mvc/index.php/admin/category/uploadfile",function (e) {
        $("input[type=hidden]").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
