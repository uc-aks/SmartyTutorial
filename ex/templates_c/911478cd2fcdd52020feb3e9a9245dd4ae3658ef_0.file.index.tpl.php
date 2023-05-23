<?php
/* Smarty version 4.3.1, created on 2023-05-22 07:18:22
  from 'E:\Xampp\htdocs\demoSmarty\ex\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646afb1e2ba804_41115731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '911478cd2fcdd52020feb3e9a9245dd4ae3658ef' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\ex\\index.tpl',
      1 => 1684732649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646afb1e2ba804_41115731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\ex\\smarty\\libs\\plugins\\modifier.Replace.php','function'=>'smarty_modifier_Replace',),1=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\ex\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),2=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\ex\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
?>
1. Both String be in lower case.<br>
<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['str1']->value, 'UTF-8');?>
<br>
<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['str2']->value, 'UTF-8');?>

<br><br>
2. Replace ucertify with uCertify in both the String.<br>
<?php echo smarty_modifier_Replace($_smarty_tpl->tpl_vars['str1']->value,'ucertify','uCertify');?>
<br>
<?php echo smarty_modifier_Replace($_smarty_tpl->tpl_vars['str2']->value,'ucertify','uCertify');?>
<br><br>
3. Wrap the word only 30 character in a line.<br>
<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['str1']->value,30,'<br/></n>',false);?>
<br><br>
4. Merge both Strings<br>
<?php echo ($_smarty_tpl->tpl_vars['str1']->value).($_smarty_tpl->tpl_vars['str2']->value);?>


<hr>
<?php echo smarty_function_html_checkboxes(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_checkboxes']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>

<br>
<br><?php }
}
