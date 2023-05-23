<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('var',4);
$smarty->assign('num',5);
$data = array(1000,1001,1002);
$smarty->assign('custid',$data);
$smarty->display('index.tpl');
?>