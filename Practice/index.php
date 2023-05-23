<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('option',array(1=>'jQuery',2=>'AJAX',3=>'Java'));
$smarty->assign('select',1);

$smarty->assign('exampleOfEscape',"This is an amazing");

$smarty->assign('start',5);
$smarty->assign('end',50);
$smarty->assign('step',5);

$smarty->assign('str','hello');

$smarty->assign('cycle',array(10,20,30));
$smarty->display('index.tpl');
?>