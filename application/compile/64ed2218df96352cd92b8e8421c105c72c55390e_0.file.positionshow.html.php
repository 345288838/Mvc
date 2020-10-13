<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 16:31:26
  from 'D:\WampSever\www\2006\mvc\application\template\admin\positionshow.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e1b5e1d00a4_98470049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ed2218df96352cd92b8e8421c105c72c55390e' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\positionshow.html',
      1 => 1601051482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e1b5e1d00a4_98470049 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>positionshow</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <style>

    </style>
</head>
<body style="background: none">
<div class="container" style="padding: 5%">
    <table class='table table-bordered'>
       <tr>
           <th>posid</th>
           <th>名称</th>
            <th>描述</th>
           <th>操作</th>
       </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['posinfo'];?>
</td>
            <td>
                <a class="btn btn-info" href="/2006/mvc/index.php/admin/position/edit">编辑</a>
                <a class="btn btn-info" href="/2006/mvc/index.php/admin/position/del">删除</a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
</body>
</html><?php }
}
