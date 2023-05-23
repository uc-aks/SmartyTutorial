<?php
/* Smarty version 4.3.1, created on 2023-05-23 05:37:21
  from 'E:\Xampp\htdocs\demoSmarty\Practice2\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646c34f1f21dc7_74775426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b3e37dd3edc199c4a32e095e7573c466a26d829' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\Practice2\\index.tpl',
      1 => 1684813030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646c34f1f21dc7_74775426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice2\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice2\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice2\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice2\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),4=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice2\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>
1. Example of html_options.<br>
<?php echo smarty_function_html_options(array('name'=>'htmlOption','selected'=>$_smarty_tpl->tpl_vars['myOptions']->value,'options'=>$_smarty_tpl->tpl_vars['Options']->value),$_smarty_tpl);?>
<br><br>
2. Example of Escape.<br>
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['escStr']->value, ENT_QUOTES, 'UTF-8', true);?>
<br><br>
3. Write a Program to print a table of 5.<br>
<?php
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['val']->step = $_smarty_tpl->tpl_vars['skip']->value;$_smarty_tpl->tpl_vars['val']->total = (int) ceil(($_smarty_tpl->tpl_vars['val']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['val']->step));
if ($_smarty_tpl->tpl_vars['val']->total > 0) {
for ($_smarty_tpl->tpl_vars['val']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['val']->iteration = 1;$_smarty_tpl->tpl_vars['val']->iteration <= $_smarty_tpl->tpl_vars['val']->total;$_smarty_tpl->tpl_vars['val']->value += $_smarty_tpl->tpl_vars['val']->step, $_smarty_tpl->tpl_vars['val']->iteration++) {
$_smarty_tpl->tpl_vars['val']->first = $_smarty_tpl->tpl_vars['val']->iteration === 1;$_smarty_tpl->tpl_vars['val']->last = $_smarty_tpl->tpl_vars['val']->iteration === $_smarty_tpl->tpl_vars['val']->total;
echo $_smarty_tpl->tpl_vars['val']->value;?>

<?php }
}
?><br><br>
4. Concatenate two Strings.<br>
<?php echo ($_smarty_tpl->tpl_vars['conStr']->value).(' String');?>
<br><br>
5. Difference between counter and cycle<br>
<?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>

<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br>
<?php
$__section_jaiho_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cycle']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_jaiho_0_total = $__section_jaiho_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_jaiho'] = new Smarty_Variable(array());
if ($__section_jaiho_0_total !== 0) {
for ($__section_jaiho_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_jaiho']->value['index'] = 0; $__section_jaiho_0_iteration <= $__section_jaiho_0_total; $__section_jaiho_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_jaiho']->value['index']++){
?>
<tr class=<?php echo smarty_function_cycle(array('values'=>"odd even"),$_smarty_tpl);?>
><td><?php echo $_smarty_tpl->tpl_vars['cycle']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_jaiho']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_jaiho']->value['index'] : null)];?>
</td></tr>
<?php
}
}
?><br><br>
8. Our Cultures<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Culture']->value, 'culture');
$_smarty_tpl->tpl_vars['culture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['culture']->value) {
$_smarty_tpl->tpl_vars['culture']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['culture']->value, 'cult');
$_smarty_tpl->tpl_vars['cult']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cult']->value) {
$_smarty_tpl->tpl_vars['cult']->do_else = false;
?>
<ul><li><?php echo $_smarty_tpl->tpl_vars['cult']->value;?>
</li></ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
9. Controls using Smarty<br>
<?php echo smarty_function_html_checkboxes(array('name'=>'htmlCheckboxes','selected'=>$_smarty_tpl->tpl_vars['myOptions']->value,'options'=>$_smarty_tpl->tpl_vars['Options']->value),$_smarty_tpl);?>
<br>
<?php echo smarty_function_html_radios(array('name'=>'htmlRadio','selected'=>$_smarty_tpl->tpl_vars['myOptions']->value,'options'=>$_smarty_tpl->tpl_vars['Options']->value),$_smarty_tpl);?>


<?php }
}
