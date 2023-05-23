<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('start',5);
$smarty->assign('end',50);
$smarty->assign('step',5);
$smarty->display('index.tpl');
?>