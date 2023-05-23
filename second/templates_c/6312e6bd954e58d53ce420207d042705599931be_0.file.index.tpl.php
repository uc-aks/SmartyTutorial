<?php
/* Smarty version 4.3.1, created on 2023-05-18 06:28:07
  from 'E:\Xampp\htdocs\demoSmarty\second\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6465a957c1cc98_98604507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6312e6bd954e58d53ce420207d042705599931be' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\second\\index.tpl',
      1 => 1684384049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6465a957c1cc98_98604507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3086010726465a957bcae89_82689060', 'content');
?>



<?php }
/* {block 'content'} */
class Block_3086010726465a957bcae89_82689060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3086010726465a957bcae89_82689060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\second\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\second\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<ul>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
<?php }
}
?>
</ul>
<hr>
<?php
$__section_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_0_total = $__section_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_0_total !== 0) {
for ($__section_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_0_iteration <= $__section_rows_0_total; $__section_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
   <td><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</td>
</tr>
<?php
}
}
?>
<hr>
  <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['foo']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>

<hr>
<?php $_smarty_tpl->_assignInScope('name', 'akash');
echo $_smarty_tpl->tpl_vars['name']->value;?>

<hr>

<?php echo smarty_modifier_date_format(time(),'%d/%m/%Y');?>

<?php echo smarty_modifier_date_format(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,'%m/%d/%Y'),'%m-%d-%Y');?>

<hr>

<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['arr']) ? $_smarty_tpl->tpl_vars['arr']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 10;
$_smarty_tpl->_assignInScope('arr', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['arr']) ? $_smarty_tpl->tpl_vars['arr']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 20;
$_smarty_tpl->_assignInScope('arr', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['arr']) ? $_smarty_tpl->tpl_vars['arr']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 30;
$_smarty_tpl->_assignInScope('arr', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['arr']) ? $_smarty_tpl->tpl_vars['arr']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 40;
$_smarty_tpl->_assignInScope('arr', $_tmp_array);
echo $_smarty_tpl->tpl_vars['arr']->value[0];?>

<hr>
<?php $_smarty_tpl->_assignInScope('val', 10);
echo $_smarty_tpl->tpl_vars['val']->value;?>

<a href="http://localhost/demosmarty/second/index2.php">Click here</a>
<?php
}
}
/* {/block 'content'} */
}
