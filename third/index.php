<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$arr = ['name'=>'Akash Shukla','age'=>20];
$smarty->assign('arr',$arr);
$smarty->assign('foo', 'bar');
define('MY_CONST_VAL','CHERRIES');
$date = date_create('2025-05-23');
date_format($date,"Y/m/d H:i:s");
$smarty->assign('date', $date);
$smarty->assign('');
$smarty->display('demo.tpl');

?>