<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 07:23:03
  from 'D:\WampSever\www\2006\mvc\application\template\index\service.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d9ad733ccb4_65166080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30d912788fbfec56a6f3d546294e85bab26cbc0e' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\index\\service.html',
      1 => 1601018582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d9ad733ccb4_65166080 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服务</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/project.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
/index/index.css">
    <style>
        @keyframes banner {
            from{
                opacity: 0;
            }
            to{
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="fubanner">
    <div class="casebanner" style="background-image: url('http://localhost/2006/mvc/application/static/img/intro.jpg');">
        <h2 style="animation-name: banner;animation-duration: 1s;">以客户为中心</h2>
        <span></span>
        <p style="animation-name: banner;animation-duration: 1s;">精益求精，让客户101%满意，让客户惊喜，让客户感动。</p>
    </div>
</div>
<div class="con">
    <div class="casecon">
        <div class="con-title">
            <h1><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]['cname'];?>
</h1>
            <div class="con-h">
                <?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]['info'];?>

            </div>
        </div>
        <div class="sear">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <div class="col-md-3 col-sm-6 col-xs-12 box-list">
                <div class="box-cont">
                    <div class="box-icon1">
                        <div style="margin: 0 auto ;width: 50px; height: 50px">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        </div>
                    </div>
                    <div class="box-t1"><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</div>
                    <div class="hr"></div>
                    <div class="t3">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['cons'];?>

                    </div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="con">
    <div class="casecon">
        <div class="con-title">
            <h1><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]['cname'];?>
</h1>
            <div class="con-h">
                <?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]['info'];?>

            </div>
        </div>
        <div class="seravlist">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li class="serve-item">
                        <span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                        </span>
                    <div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</h1>
                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['cons'];?>
</p>
                    </div>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="clear"></div>
            </ul>

        </div>
    </div>
</div>
<div class="con fwlc" style="background-image: url('http://localhost/2006/mvc/application/static/img/b.jpg')">
    <div class="casecon con-tit">
        <div class="con-title">
            <h1><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]['cname'];?>
</h1>
            <div class="con-h">
                <?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]['info'];?>

            </div>
        </div>
        <div class="sjlcon">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li class="sjlcon-item">
                    <div class="sj">
                        <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['ctitle'];?>
</h2>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['cons'];?>

<!--                        <h3>商务代表</h3>-->
<!--                        <p>售前咨询</p>-->
<!--                        <p>确认需求</p>-->
<!--                        <p>签订合同</p>-->
<!--                        <p>联络沟通</p>-->
                    </div>
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
echo '<script'; ?>
 src="./project.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
