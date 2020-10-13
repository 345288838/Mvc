<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 19:01:15
  from 'D:\WampSever\www\2006\mvc\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6cecfbad4368_60588359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb1943a6030559368ffd2ebc7ac65ce38c00bab9' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\category.html',
      1 => 1600974071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6cecfbad4368_60588359 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/category.css">
</head>
<body>
<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class='table table-bordered'>
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
    <?php } else { ?>
    <table>
        <tr>
            <td>没有数据</td>
        </tr>
    </table>
    <?php }?>
</div>

<div class="pannel addpanner ">

    <input type="button" value="关闭" class="btn btn-info closed">
    <form action="/2006/mvc/index.php/admin/category/add" method="post" class="form-horizontal"
          style="width: 75%;margin: 20px auto">
        <div class="sub">
            <div class="form-group">
                <label for="cname1">栏目名称</label>
                <input type="text" name="cname" id="cname1" class=" form-control">
            </div>
            <input type="hidden" name="cid">
            <div class="form-group">
                <label for="isshow1">是否可见</label>
                <select name="isshow" class="form-control" id="isshow1">
                    <option value="1">在导航可见</option>
                    <option value="0">在导航不可见</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tpl_name1">模板名称</label>
                <input type="text" name="tpl_name" placeholder="输入对应的模板"
                       class="form-control" id="tpl_name1">
            </div>

            <div class="form-group">
                <label for="info1">描述</label>
                <textarea class="form-control" name="info" id="info1" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="提交" class="btn btn-info subbut">

    </form>

</div>

<div class="pannel editpanner">
    <input type="button" value="关闭" class="btn btn-info closed">
    <form action="/2006/mvc/index.php/admin/category/add" method="post " class="form-horizontal editform"
          style="width: 75%;margin: 20px auto">
        <div class="form-group">
            <label for="cname">栏目名称</label>
            <input type="text" name="cname" id="cname" class=" form-control">
        </div>
        <input type="hidden" name="cid">

        <div class="form-group">
            <label for="opts">栏目级别</label>
            <select name="pid" id="opts" class="form-control sele">

            </select>
        </div>

        <div class="form-group">
            <label for="isshow">是否可见</label>
            <select name="isshow" class="form-control" id="isshow">
                <option value="1">在导航可见</option>
                <option value="0">在导航不可见</option>
            </select>
        </div>

        <div class="form-group">
            <label for="editupload">文件上传</label>
            <div class="editupload" id="editupload"></div>
            <input type="hidden" name="imgurl">
        </div>


        <div class="form-group">
            <label for="tpl_name">模板名称</label>
            <input type="text" name="tpl_name" placeholder="输入对应的模板"
                   class="form-control" id="tpl_name">
        </div>

        <div class="form-group">
            <label for="info">描述</label>
            <textarea class="form-control" name="info" id="info" rows="2"></textarea>
        </div>

        <input type="button" value="修改" class="btn btn-info subbut" id="edit">

    </form>

</div>

<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var upObj=new upload();
upObj.createView({
    parent:document.querySelector(".editupload")
})
upObj.selectBtn.style.lineHeight="30px";
upObj.upBtn.style.lineHeight="30px"
    upObj.up("/2006/mvc/index.php/admin/category/uploadfile",function (e) {
        $("#imgurl").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
