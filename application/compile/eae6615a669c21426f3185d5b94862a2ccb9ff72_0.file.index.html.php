<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 16:57:11
  from 'D:\WampSever\www\2006\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e2167a80ec8_27297444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eae6615a669c21426f3185d5b94862a2ccb9ff72' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\index.html',
      1 => 1601053023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e2167a80ec8_27297444 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/index.css">
</head>
<body>
<div class="head">
    <h1>欢迎来到后台管理系统</h1>
    <div class="loginfo">
        <span>用户 : <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
        <span><a href="/2006/mvc/index.php/admin/index/logout">退出登录</a></span>
        <span><a href="/2006/mvc/index.php">前台页面</a></span>
    </div>
</div>
<div class="main">
    <div class="left">
        <ul>
            <div class="fList">
                推荐位管理
            </div>
            <ul class="son" style="display: none" >
                <li class="sonList"><a href="/2006/mvc/index.php/admin/position/add" target="main">添加推荐位</a></li>
                <li  class="sonList"><a href="/2006/mvc/index.php/admin/position/show" target="main">查看推荐位</a></li>
            </ul>

        </ul>
        <ul>
            <div class="fList">
                栏目管理
            </div>
                <ul class="son" style="display: none" >
                    <li class="sonList"><a href="/2006/mvc/index.php/admin/category" target="main">查看栏目</a></li>
                    <li class="sonList"><a href="/2006/mvc/index.php/admin/category/addpage" target="main">添加栏目</a></li>
                </ul>

        </ul>
        <ul>
            <div class="fList">
                内容管理
            </div>
                <ul class="son" style="display: none" >
                    <li class="sonList"><a href="/2006/mvc/index.php/admin/content/add" target="main">添加内容</a></li>
                    <li class="sonList"><a href="/2006/mvc/index.php/admin/content/showList" target="main">查看内容</a></li>
                </ul>

        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
    <span>XXX版权信息，XXX制作，联系方式：XXX</span>
</div>
<?php echo '<script'; ?>
>
    var flag=true;
    var sonList=document.querySelectorAll(".son");
    var fList=document.querySelectorAll(".fList");
    for(let i=0;i<sonList.length;i++){
        fList[i].style.cursor="pointer";
        fList[i].onclick=function click() {
            if(flag){
                sonList[i].style.display="block";
                flag=false;
            }else {
                sonList[i].style.display="none";
                flag=true;
            }
        }
    }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
