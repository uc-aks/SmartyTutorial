<?php
/* Smarty version 4.3.1, created on 2023-05-16 13:14:29
  from 'E:\Xampp\htdocs\demoSmarty\third\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6463659544dc94_30011370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44ee4e8f8a8721f4f3049d8e2bc1afa90c3949be' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\third\\index.tpl',
      1 => 1684235666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6463659544dc94_30011370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\third\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php echo smarty_modifier_date_format(time());?>
<br><br>
<?php echo smarty_modifier_date_format(time(),"%D");?>
<br><br>
<?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date']);?>
<br><br>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value);?>
<br><br>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%A, %B %e, %Y");?>
<br><br>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,$_smarty_tpl->tpl_vars['config']->value['time']);
}
}
