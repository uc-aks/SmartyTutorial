<?php
/* Smarty version 4.3.1, created on 2023-05-18 12:21:31
  from 'E:\Xampp\htdocs\demoSmarty\htmlCheckboxes\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6465fc2bb2e1e3_15017802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2dfa86c340a0d13f377470f76a293a0bf4eda61' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\htmlCheckboxes\\index.tpl',
      1 => 1684405288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6465fc2bb2e1e3_15017802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\htmlCheckboxes\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),1=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\htmlCheckboxes\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\htmlCheckboxes\\smarty\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),));
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1 style="text-align:center;">Smarty Template</h1>
</body>
</html>
<?php echo smarty_function_html_checkboxes(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_checkboxes']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

<hr>
<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>

<hr>
<?php $_smarty_tpl->_assignInScope('pageTitle', 'Page2');
echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>

<hr>
<?php echo (defined('CONST_VAL') ? constant('CONST_VAL') : null);?>

<hr>
<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value[1];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value[2];?>


<?php }
}
