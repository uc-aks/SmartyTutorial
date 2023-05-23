<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('cust_checkboxes', array(
                                     1000 => 'Joe Schmoe',
                                     1001 => 'Jack Smith',
                                     1002 => 'Jane Johnson',
                                     1003 => 'Charlie Brown')
                                   );
$smarty->assign('customer_id', 1003);
$smarty->assign('myOptions', array(
    1800 => 'Joe Schmoe',
    9904 => 'Jack Smith',
    2003 => 'Charlie Brown')
    );

$smarty->assign( 'data', array(1,2,3,4,5,6,7,8,9,10) );
$smarty->assign( 'tr', array('bgcolor="#eeeeee"','bgcolor="#dddddd"') );
$smarty->assign('mySelect', 9904);
define('CONST_VAL','This is my constant variable');
$smarty->allow_php_templates = true;
$arr = [30,40];
$smarty->assign('arr',$arr);
$smarty->append($arr,50);
$smarty->display('index.tpl');
?>