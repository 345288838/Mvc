<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 19:34:27
  from 'D:\WampSever\www\2006\mvc\application\template\index\lists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e464354ce18_48487523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb9eee0419163d50f72accb59de5b4cbc5eb70a6' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\index\\lists.html',
      1 => 1601062464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e464354ce18_48487523 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lists</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/project.css">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="fubanner">
    <div class="casebanner" style="background-image: url('http://localhost/2006/mvc/application/static/img/intro.jpg');">
        <h2>佳速全力以赴</h2>
        <span></span>
        <p>为您打造无与伦比的更靠谱的互联网开发解决方案</p>
    </div>
</div>
<div class="con">
    <div class="casecon">
        <div class="con-title">
            <h1><?php echo $_smarty_tpl->tpl_vars['condata']->value[0]['ctitle'];?>
</h1>
            <div class="con-h">
                <?php echo $_smarty_tpl->tpl_vars['condata']->value[0]['info'];?>

            </div>
        </div>
        <p style="text-align: center"><img src="<?php echo $_smarty_tpl->tpl_vars['condata']->value[0]['imgurl'];?>
" alt="" style="width: 80%;"></p>
    </div>

</div>
<!--<div style="width: 100%;height: 500px" >-->

<!--<ul>-->
<!--    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>-->
<!--    <li>-->
<!--        <a href="/2006/mvc/index.php/index/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</a>-->
<!--    </li>-->
<!--    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
<!--</ul>-->
<!--</div>-->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
