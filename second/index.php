<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$i=1;
$smarty->assign('i', $i);
$smarty->assign('data',[1,2,3]);
$str = 'The server name is {$smarty.server.SERVER_NAME|upper} '
       .'at {$smarty.server.SERVER_ADDR}';
$smarty->assign('foo',$str);
$smarty->assign('date',"27-12-2023");
$smarty->display('index.tpl');
?>