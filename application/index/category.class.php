<?php

use \libs\smarty;
use \libs\db;
use \libs\getheader;

if (!defined("MVC")) {
    die("非法入侵");
}

class category
{
    //分类页
    function int()
    {
        $cid = $_GET['cid'];
        $smarty = new smarty();
        $db = new db();
        $db = $db->db;
        $result = $db->query("select * from category where cid=$cid");

        $currentInfo = $result->fetch_assoc();


        $result1 = $db->query("select * from category where pid=$cid");


        $sonInfo = array();


        while ($row = $result1->fetch_assoc()) {
            $sonInfo[] = $row;
        }

        $coninfo = array();

        foreach ($sonInfo as $k => $v) {
            $cid = $v['cid'];
            $result = $db->query("select * from content where cid=$cid");
            while ($row = $result->fetch_assoc()) {
                $coninfo[$k][] = $row;
            }
        }

        $header = new getheader();
        $smarty->assign("menuData", $header->menuData);
        $smarty->assign("header", $header->header);
        $smarty->assign("footer", $header->footer);
        $smarty->assign("soninfo", $sonInfo);
        $smarty->assign("currentInfo", $currentInfo);
        $smarty->assign("coninfo", $coninfo);
        $smarty->display("index/" . $currentInfo["tpl_name"]);
    }
}