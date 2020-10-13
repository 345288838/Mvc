<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 14:58:41
  from 'D:\WampSever\www\2006\mvc\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e05a148dc66_27854740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e33794d35f004ff7b25fba4e0188b77feef1b01' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\showList.html',
      1 => 1601045906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e05a148dc66_27854740 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>showList</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>
    <style>
        .table>tbody>tr>td{
            border: 1px solid #fff;
            line-height: 30px;
        }
        .table>tbody>tr>th{
            border: 1px solid #fff;
            line-height: 30px;
        }
    </style>
</head>
<body style="background: none; padding-top:3%;" >
<div class="container">

    <form action="" class="form-inline" style="margin-bottom: 20px" method="post">
        <div class="form-group">
            <label for="cid">选择分类</label>
            <select name="cid" id="cid" class="form-control"></select>
        </div>
        <div class="form-group">
            <label for="ctitle">标题关键字</label>
            <input name="ctitle" id="ctitle" class="form-control" placeholder="输入标题关键字">
        </div>
        <div class="form-group">
            <label for="order">倒序</label>
            <input type="checkbox" name="order" id="order" class="form-control" checked value="desc">
        </div>
        <input type="submit" class="btn btn-info" value="查询">
    </form>

    <table class="table table-bordered">
        <tr>
            <th>所属分类</th>
            <th>标题</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

            </td>
            <td>
                <a class="btn btn-info" href="/2006/mvc/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                <a class="btn btn-info" href="/2006/mvc/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                <a class="btn btn-info" href="/2006/mvc/index.php/admin/content/del?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">删除</a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
