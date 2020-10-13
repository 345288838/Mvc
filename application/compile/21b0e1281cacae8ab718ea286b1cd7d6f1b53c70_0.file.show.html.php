<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 04:55:30
  from 'D:\WampSever\www\2006\mvc\application\template\index\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c26c2c220e7_97146391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21b0e1281cacae8ab718ea286b1cd7d6f1b53c70' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\index\\show.html',
      1 => 1600923326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c26c2c220e7_97146391 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="fubanner">
    <div class="casebanner" style="background-image: url('http://localhost/2006/mvc/application/static/img/intro.jpg');">
        <h2>全行业解决方案</h2>
        <span></span>
        <p>针对各行业业务特性，打造个性化行业解决方案，为用户提供一站式的产品与服务。</p>
    </div>
</div>
<div class="con">
    <div class="casecon">
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['condata']->value['ctitle'];?>

        </h1>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['condata']->value['cons'];?>

        </p>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
