<?php
if(!defined("MVC")){
    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\code;
class index{
    function int(){
        $smarty=new smarty();
        $smarty->display("admin/login.html");
    }
    function login(){
        global $config;
        $uname=addslashes($_POST["uname"]);
        $pass=md5(md5($_POST["pass"]));

        if($config["code"]["isCheck"]){
            if($_POST["code"]!==$_SESSION["code"]){
                echo '验证码错误';
                return;
            }
        }

        if(strlen($uname)<5||empty($pass)){
            echo "用户名或密码不符合规范";
            return;
        }

        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from user where uname='$uname'and pass='$pass'");
        if($result->num_rows<1){
            return "用户名不存在";
        }else{
            $_SESSION["login"]="yes";
            $_SESSION["uname"]=$uname;
            header("location:/2006/mvc/index.php/admin/index/first");
        }
        $db->close();
    }

    function logout(){
        session_destroy();
        header("location:/2006/mvc/index.php/admin");
    }

    function first(){
        if (isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty=new smarty();
            @$smarty->assign("uname",$_SESSION["uname"]);
            $smarty->display("admin/index.html");
        }else{
            header("location:/2006/mvc/index.php/admin");
        }

    }

    function mycode(){
        $code=new code();
        $code->out();
    }


    //MD5加密：会把任何类型的字符串加密成一个32字节表示16进制的字符串
    //crypt，传入随机的种子
    //sha1，四十个用十六进制表示的字符串，比MD5更安全

}