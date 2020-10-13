<?php
use \libs\smarty;
use libs\db;
use libs\getheader;
if(!defined("MVC")){
    die("非法入侵");
}
class lists{
    function int(){
        $db=new db();
        $db=$db->db;
        $cid=$_GET['cid'];

        $result=$db->query("select * from category where cid=$cid");
        $currentinfo=$result->fetch_assoc();

        //父类的信息
        $pid=$currentinfo['pid'];
        $result=$db->query("select * from category where cid=$pid");
        $parentInfo=$result->fetch_assoc();

        //同一级类的信息
        $pcid=$parentInfo['cid'];
        $result=$db->query("select * from category where pid=$pcid");
        $sibling=array();
        while ($row=$result->fetch_assoc()){
            $sibling[]=$row;
        }

        $result=$db->query("select * from content where cid=$cid");

        $condata=array();
        while ($row=$result->fetch_assoc()){
            $condata[]=$row;
        }

        $smarty=new smarty();

        $tpl=$currentinfo["tpl_name"]?$currentinfo["tpl_name"]:"lists.html";

        $header=new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("currentinfo",$currentinfo);//当前信息
        $smarty->assign("condata",$condata);//内容的信息
        $smarty->assign("parentInfo",$parentInfo);
        $smarty->assign("sibling",$sibling);
        $smarty->display("index/".$tpl);
    }
}