<?php
/* Smarty version 4.3.1, created on 2023-05-17 12:44:03
  from 'E:\Xampp\htdocs\demoSmarty\ifElseifElse\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6464aff3a97716_87586547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5631454a2234e0a1ce4135c267f1263aa3ece5b7' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\ifElseifElse\\index.tpl',
      1 => 1684319928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6464aff3a97716_87586547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\ifElseifElse\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\ifElseifElse\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
if ($_smarty_tpl->tpl_vars['var']->value === 4) {?>
<h1 style="color:red;">Data type & Data are same.</h1>
<?php } else { ?>
Data type & Data are different.
<?php }?>

Today's date is

<?php echo smarty_modifier_date_format(time());?>


<hr>

<?php
$__section_foo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_0_total = min(ceil(($__section_foo_0_loop - 0)/ 2), $__section_foo_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_0_total !== 0) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $__section_foo_0_iteration <= $__section_foo_0_total; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] += 2){
?>   <?php echo $_smarty_tpl->tpl_vars['custid']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null)];?>
<br />
<?php
}
}
?>
<hr>

<?php
 while ($_smarty_tpl->tpl_vars['num']->value > 0) {?>
<div style="color:lightgreen;"><?php echo $_smarty_tpl->tpl_vars['num']->value--;?>
</div>
<?php }?>

<hr>

<?php echo smarty_function_counter(array('start'=>0,'skip'=>3),$_smarty_tpl);
}
}
