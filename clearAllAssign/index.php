<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('name', 'Fred');
$smarty->assign('address', 'Rencho');
$smarty->display('index.tpl');
?>