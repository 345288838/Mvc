<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 12:37:31
  from 'D:\WampSever\www\2006\mvc\application\template\index\news-lists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6de48b6309f0_45776554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d9594ad07daec881302dd954be0fa4f27856cb' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\index\\news-lists.html',
      1 => 1601037448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6de48b6309f0_45776554 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/project.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/index.css">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <div class="fubanner">
        <div class="casebanner casebanner2" style="background-image: url('http://localhost/2006/mvc/application/static/img/newsback.jpg');">
            <h2>与您分享佳速的每一次成长</h2>
            <span></span>
            <p>佳速每一次的成长都离不开您的鼎力支持</p>
        </div>
    </div>
    <div class="con">
        <div class="newscon">
            <div class="con-title">
                <h1>新闻中心</h1>
                <div class="con-h">
                    <?php echo $_smarty_tpl->tpl_vars['parentInfo']->value['info'];?>

                </div>
            </div>
            <div class="news-tit">
                <ul class="news-nav">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sibling']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                    <li>
                        <a href="/2006/mvc/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" style="color: #ff6900;"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <div class="newslist">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                    <li class="newslist-item">
                        <a href="/2006/mvc/index.php/index/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" style="color: #666;">
                            <div class="newlistimg">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                            </div>
                            <h4><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</h4>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>

                            </p>
                            <span class="data">2020-01-14</span>
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
