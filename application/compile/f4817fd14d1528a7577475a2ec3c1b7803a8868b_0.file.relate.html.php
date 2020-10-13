<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 00:27:55
  from 'D:\WampSever\www\2006\mvc\application\template\index\relate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e8b0b693331_73146230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4817fd14d1528a7577475a2ec3c1b7803a8868b' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\index\\relate.html',
      1 => 1601080074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e8b0b693331_73146230 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>联系</title>
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
        <div class="casebanner" style="background-image: url('http://localhost/2006/mvc/application/static/img/intro.jpg'); background-size: cover" >
            <h2>敬候佳音</h2>
            <span></span>
            <p>佳速用心倾听您的每一次诉说</p>
        </div>
    </div>
    <div class="con">
        <div class="left">
            <h1 class="s26">上海佳速网络技术有限公司</h1>
            <p>地址：上海浦东新区三林路88弄1号楼A323室</p>
            <p>电话：86-021-58361813　58361586 　58361839　58355051</p>
            <p>传真：86-021-58361586-824</p>
            <p>邮箱：info@jiasu.cn</p>
            <p>手机/微信：159 2178 8833</p>
            <p>官方电话：021-58361813</p>
            <p>QQ：1256635055</p>
            <div style="width: 100%;height: 500px;border: 1px solid rgb(204, 204, 204);margin-top: 25px; overflow: hidden;position: relative;z-index: 0;color: rgb(0, 0, 0);text-align: left;"></div>

        </div>
        <div class="right">
            <div class="Cooperationright">
                <h1 class="s26">我有互联网开发服务需求</h1>
                <ul>
                    <li>
                        <label class="clearfix">
                            <input type="text" placeholder="公司名称">
                        </label>
                    </li>
                    <li>
                        <label class="clearfix">
                            <input type="text" placeholder="姓名">
                        </label>
                    </li>
                    <li>
                        <label class="clearfix">
                            <input type="text" placeholder="电话/手机">
                        </label>
                    </li>
                </ul>
                <h4 class="s26">您需要的服务</h4>
                <dl>
                    <dd>
                        <label class="ib">
                            <input type="checkbox" value="我需要网站建设" name="myS">我需要网站建设
                        </label>
                        <label class="ib">
                            <input type="checkbox" value="我需要APP开发" name="myS">我需要APP开发
                        </label>
                        <label class="ib">
                            <input type="checkbox" value="我需要微信公众号开发" name="myS">我需要微信公众号开发
                        </label>
                        <label class="ib">
                            <input type="checkbox" value="我需要小程序开发" name="myS">我需要小程序开发
                        </label>
                        <label class="ib">
                            <input type="checkbox" value="我需要整合网络营销" name="myS">我需要整合网络营销
                        </label>
                    </dd>
                </dl>
                <h4 class="s26">您最关注的地方</h4>
                <dl>
                    <dd>
                        <label class="ib">
                            <input type="checkbox" value="对功能要求比较高" name="myS">对功能要求比较高
                        </label>
                        <label class="ib">
                            <input type="checkbox" value="对设计创意要求比较高" name="myS">对设计创意要求比较高
                        </label>
                        <label class="ib">
                            <input type="checkbox" value="网络推广/优化" name="myS">网络推广优化
                        </label>
                    </dd>
                </dl>
                <h4 class="s26">您的预算</h4>
                <dl>
                    <dd>
                        <label class="ib">
                            <input type="radio" value="网络推广/优化" name="myY" checked="checked">2万以下
                        </label>
                        <label class="ib">
                            <input type="radio" value="网络推广/优化" name="myY" >2万-5万
                        </label>
                        <label class="ib">
                            <input type="radio" value="网络推广/优化" name="myY">5万-10万
                        </label>
                        <label class="ib">
                            <input type="radio" value="网络推广/优化" name="myY">10万以上
                        </label>
                    </dd>
                </dl>
                <p>
                    <input type="submit" class="tab-btn" value="提交需求">
                </p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
 src="./project.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
