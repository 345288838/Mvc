<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 09:04:54
  from 'D:\WampSever\www\2006\mvc\application\template\index\programme.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c613632acd1_73694765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741707d8a66c713d456fb6012091d32c45dfcc8b' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\index\\programme.html',
      1 => 1600938292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c613632acd1_73694765 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>方案</title>
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
                <h1>我们的解决方案</h1>
                <div class="con-h">
                    因为专注所以更专业，实现各行业定制化解决方案
                </div>
            </div>
            <div class="sear">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soninfo']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                    <li class="title">
                        <a href="/2006/mvc/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                            <div class="iconimg">
                                <img src="<?php echo IMG_ADD;?>
p<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
.png" alt="">
                            </div>
                            <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</h2>
                            <p><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</p>
                        </a>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
 src="./project.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
