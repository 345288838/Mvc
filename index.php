<?php
//MVC架构  model数据 view视图  c控制器，将数据和视图捏合到一起，后台和前端分离开
//路由的方式  pathinfo  /模块/控制/动作  获取数据 分配数据 呈现数据
//单入口文件
//为了让前端人员能够用数据，后台人员给前端人员构造一套极其简单的语言，但是这套语言，谁都不认识，就要对简单的语言进行解析，就是模板引擎。
//能让前后台分离，但是运行效率不高，至少多执行5步；开发效率高了。
//载入原内容；通过正则替换原内容；写入conpile里面；分配变量；载入进来；
//编译文件刚开始是不存在的，直接运行，编译文件就会生成。编译文件存在，直接运行。但是原文件修改，编译文件不修改。
//编译文件已经存在并且编译文件的修改时间大于源文件的修改时间，运行编译文件
//缓冲区，只有在给客户端返回内容时会用到；没有输出只有逻辑的时候，不用缓冲区；
//php解析完内容先不给apache，把将要输出给客户端的内容，暂存到缓冲区，等待所有的代码执行完成或者等待相关指令，再输出给apache。
//MySQL Oracle SQLserver serverlite 结构化数据查询语法，关系型数据库；非关系型数据库：mongodb；数据仓库：hive hbase；
//主键，唯一标识，不能一样。主键往往伴随着自增；
//MD5 长度32；sha1长度40；
session_start();
header("content-type:text/html;charset=utf8");
define("MVC",true);//记录一个口令
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);//应用文件夹  __DIR__当前程序运行的目录 在本地文件夹的地址

require_once "libs/start.php";
