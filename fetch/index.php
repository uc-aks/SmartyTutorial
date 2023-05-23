<?php

include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;

// create template object with its private variable scope
$tpl = $smarty->createTemplate('index.tpl');

// assign variable to template scope
$tpl->assign('foo','bar');

// display the template
$tpl->display();

?>


