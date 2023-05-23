<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;


$smarty->assign('articleTitle',
                "'Stiff Opposition Expected to Casketless Funeral Plan'"
                );
$smarty->assign('EmailAddress','smarty@example.com');
$smarty->display('index.tpl');
?>