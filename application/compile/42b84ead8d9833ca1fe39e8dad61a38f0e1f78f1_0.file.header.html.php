<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 03:23:19
  from 'D:\WampSever\www\2006\mvc\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c1127f03059_94198375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b84ead8d9833ca1fe39e8dad61a38f0e1f78f1' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\index\\header.html',
      1 => 1600917776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c1127f03059_94198375 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
</head>
<body>
<div class="header">
    <div class="logo">
        <a href="#javascript">
            <img src="<?php echo IMG_ADD;?>
logo.png" alt="">
        </a>
        <h1>更高端的互联网开发服务商</h1>
    </div>
    <nav class="menu">
        <ul class="list-inline">
            <li class="item1">
                <div class="before" ></div>
                <a class="a1"  href="/2006/mvc/index.php">首页</a>
            </li>
            <ul class="subnav"></ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li class="item1">
                <div class="before" ></div>
                <a class="a1" href="/2006/mvc/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                <ul class="subnav">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                    <li class="subnav-list">
                        <a href="/2006/mvc/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
" title=""><?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>

                            <i class="subnav-right">></i>
                        </a>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </nav>
</div>
<?php echo '<script'; ?>
>
    var menuList=document.querySelectorAll(".item1");
    var before=document.querySelectorAll('.before');
    var subNav=document.querySelectorAll(".subnav");
    for (let i=0;i<menuList.length;i++){
        menuList[i].onmouseover=function () {
            before[i].style.transform="scale(1,1)";
        }
        menuList[i].onmouseout=function () {
            before[i].style.transform="scale(0,0)";
        }
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
