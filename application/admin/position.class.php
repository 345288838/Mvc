<?php
if (!defined("MVC")) {
    die("非法入侵");
}

use \libs\smarty;
use \libs\db;

class position
{
    function add()
    {
        $smarty = new smarty();
        $smarty->display('admin/positionadd.html');
    }

    function show()
    {
        $smarty = new smarty();
        $db = new db();
        $db = $db->db;

        $result = $db->query('select * from position');
        $arr = array();
        while ($row = $result->fetch_assoc()) {
            $arr[]=$row;
        }
        $smarty->assign('data',$arr);
        $smarty->display('admin/positionshow.html');
    }

    function addCon()
    {
        $posname = $_GET['posname'];
        $posinfo = $_GET['posinfo'];
        $db = new db();
        $db = $db->db;

        $db->query("insert into position (posname,posinfo) values ('{$posname}','{$posinfo}')");
        if ($db->affected_rows > 0) {
            echo "<script>alert('插入成功');location.href='/2006/mvc/index.php/admin/position/add'</script>";
        } else {
            echo "<script>alert('插入失败');location.href='/2006/mvc/index.php/admin/position/add'</script>";
        }
    }


}