<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$config['date'] = '%I:%M %p';
$config['time'] = '%H:%M:%S';
$smarty->assign('config', $config);
$smarty->assign('yesterday', strtotime('-1 day'));

$smarty->display('index.tpl');
?>