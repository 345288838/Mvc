<?php
use \libs\smarty;
use \libs\db;
class reg{
    function add(){
        $smarty=new smarty();
//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMP_PATH);
        $smarty->display("admin/reg.html");
    }
    function addUser(){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $pass1=$_POST["pass1"];
        if($pass!==$pass1){
            echo "密码不一致";
            return;
        }
//        $db=new mysqli("localhost","root","123456","wuif2006","3308");
//        if($db->connect_error){
//            die("数据库连接失败");
//        }
//        $db->query("set names utf8");
        $database=new db();
        $db=$database->db;
        $result=$db->query("select uname from user where uname='{$uname}'");
        if($result->num_rows>0){
            echo "用户名已存在";
            return;
        }
        $pass=md5(md5($pass));
        $db->query("insert into user (uname,pass) VALUES ('$uname','$pass')");
        if($db->affected_rows>0){
            echo "注册成功";
        }
    }

    function checkName(){
        $uname=$_POST["uname"];

//        $db=new mysqli("localhost","root","123456","wuif2006","3308");
//        $db->query("set names utf8");
        $database=new db();
        $db=$database->db;
        $result=$db->query("select uname from user where uname='{$uname}'");
        if($result->num_rows < 1){
            echo "true";
        }else{
            echo "false";
        }
    }


}
?>