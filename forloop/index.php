<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('arr',[[10,20],[30,40]]);
$smarty->assign('start',10);
$smarty->assign('to',5);
$people = array('fname' => 'John', 'lname' => 'Doe', 'email' => 'j.doe@example.com');
$smarty->assign('myPeople', $people);
$smarty->display('index.tpl');
?>