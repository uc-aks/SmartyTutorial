<?php
/* Smarty version 4.3.1, created on 2023-05-22 08:29:53
  from 'E:\Xampp\htdocs\demoSmarty\Practice\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b0be1628664_72048007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5b16ff79c26d3df4f02d89fa86befb89dc45bd' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\Practice\\index.tpl',
      1 => 1684736989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b0be1628664_72048007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),4=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\Practice\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['option']->value,'selected'=>$_smarty_tpl->tpl_vars['select']->value),$_smarty_tpl);?>
<br>
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['exampleOfEscape']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>
<?php
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['val']->step = $_smarty_tpl->tpl_vars['step']->value;$_smarty_tpl->tpl_vars['val']->total = (int) ceil(($_smarty_tpl->tpl_vars['val']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['val']->step));
if ($_smarty_tpl->tpl_vars['val']->total > 0) {
for ($_smarty_tpl->tpl_vars['val']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['val']->iteration = 1;$_smarty_tpl->tpl_vars['val']->iteration <= $_smarty_tpl->tpl_vars['val']->total;$_smarty_tpl->tpl_vars['val']->value += $_smarty_tpl->tpl_vars['val']->step, $_smarty_tpl->tpl_vars['val']->iteration++) {
$_smarty_tpl->tpl_vars['val']->first = $_smarty_tpl->tpl_vars['val']->iteration === 1;$_smarty_tpl->tpl_vars['val']->last = $_smarty_tpl->tpl_vars['val']->iteration === $_smarty_tpl->tpl_vars['val']->total;
echo $_smarty_tpl->tpl_vars['val']->value;?>

<?php }
}
?><br>
<?php echo ($_smarty_tpl->tpl_vars['str']->value).(' everyone!');?>
<br>
<?php echo smarty_function_counter(array('start'=>0,'skip'=>3),$_smarty_tpl);?>

<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
<?php
$__section_data_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cycle']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_data_0_total = $__section_data_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_data'] = new Smarty_Variable(array());
if ($__section_data_0_total !== 0) {
for ($__section_data_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] = 0; $__section_data_0_iteration <= $__section_data_0_total; $__section_data_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']++){
?>
<tr class="<?php echo smarty_function_cycle(array('value'=>"odd even"),$_smarty_tpl);?>
">
<td><?php echo $_smarty_tpl->tpl_vars['cycle']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_data']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_data']->value['index'] : null)];?>
</td>
</tr>
<?php
}
}
?><br>
<?php echo smarty_function_html_checkboxes(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['option']->value,'selected'=>$_smarty_tpl->tpl_vars['select']->value),$_smarty_tpl);?>
<br>
<?php echo smarty_function_html_radios(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['option']->value,'selected'=>$_smarty_tpl->tpl_vars['select']->value),$_smarty_tpl);?>
<br><?php }
}
