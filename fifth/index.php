<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('articleTitle',
                'NJ judge to rule on nude beach.
Sun or rain expected today, dark tonight.
Statistics show that teen pregnancy drops off significantly after 25.'
                );
$smarty->assign('var',"This is an example of indent");
$smarty->display('index.tpl');
?>