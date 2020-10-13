<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 08:50:50
  from 'D:\WampSever\www\2006\mvc\application\template\admin\editcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6daf6acbf854_90093595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7dc8d5f3d5ecbc6bab3220c6daf1e04bc746e1' => 
    array (
      0 => 'D:\\WampSever\\www\\2006\\mvc\\application\\template\\admin\\editcon.html',
      1 => 1601023846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6daf6acbf854_90093595 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加内容</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/addcon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    tinymce.init({
        selector: '#cons',
        //skin:'oxide-dark',
        language:'zh_CN',
        plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template code codesample table charmap hr pagebreak nonbreaking anchor insertdatetime advlist lists wordcount imagetools textpattern help emoticons autosave bdmap indent2em autoresize lineheight formatpainter axupimgs image',
        toolbar: 'code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
    styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | image\
    table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs',
        height: 650, //编辑器高度
        min_height: 400,
        /*content_css: [ //可设置编辑区内容展示的css，谨慎使用
            '/static/reset.css',
            '/static/ax.css',
            '/static/css.css',
        ],*/
        fontsize_formats: '12px 14px 16px 18px 24px 36px 48px 56px 72px',
        font_formats: '微软雅黑=Microsoft YaHei,Helvetica Neue,PingFang SC,sans-serif;苹果苹方=PingFang SC,Microsoft YaHei,sans-serif;宋体=simsun,serif;仿宋体=FangSong,serif;黑体=SimHei,sans-serif;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;',
        link_list: [
            { title: '预置链接1', value: 'http://www.tinymce.com' },
            { title: '预置链接2', value: 'http://tinymce.ax-z.cn' }
        ],
        image_list: [
            { title: '预置图片1', value: 'https://www.tiny.cloud/images/glyph-tinymce@2x.png' },
            { title: '预置图片2', value: 'https://www.baidu.com/img/bd_logo1.png' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        //自定义文件选择器的回调内容
        file_picker_callback: function (callback, value, meta) {
            if (meta.filetype === 'file') {
                callback('https://www.baidu.com/img/bd_logo1.png', { text: 'My text' });
            }
            if (meta.filetype === 'image') {
                callback('https://www.baidu.com/img/bd_logo1.png', { alt: 'My alt text' });
            }
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.baidu.com/img/bd_logo1.png' });
            }
        },
        autosave_ask_before_unload: false,
        images_upload_url:"/2006/mvc/index.php/admin/category/tinyuploadfile"
    });
<?php echo '</script'; ?>
>
<div class="container" style="padding: 5%">
    <form action="/2006/mvc/index.php/admin/content/editcon" method="post">
        <div class="form-group">
            <label for="cid">所属分类</label>
            <select class="form-control" id="cid" name="cid" cid="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
">

            </select>
        </div>
        <input type="hidden" name="conid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
">
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle" placeholder="标题" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ctitle'];?>
">
        </div>

        <div class="form-group">
            <label for="info">内容概要</label>
            <textarea class="form-control" rows="5" name="info" id="info" style="resize: none"><?php echo $_smarty_tpl->tpl_vars['data']->value['info'];?>
</textarea>
        </div>

        <div class="form-group">
            <label for="upload">文件上传</label>
            <div class="upload" id="upload"></div>
            <input type="hidden" value="hidden" name="imgurl" id="imgurl">
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['imgurl'];?>
" alt="" width="150px">
        </div>

        <div class="form-group">
            <label for="cons">内容主体</label>
            <textarea class="form-control" name="cons" id="cons"><?php echo $_smarty_tpl->tpl_vars['data']->value['cons'];?>
</textarea>
        </div>
        <button type="submit" class="btn btn-info">修改</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.5.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.multiple=true;
    uploadObj.createView({
        parent:document.querySelector(".upload")
    })
    uploadObj.up("/2006/mvc/index.php/admin/category/uploadfile",function (e) {
        $("#imgurl").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
