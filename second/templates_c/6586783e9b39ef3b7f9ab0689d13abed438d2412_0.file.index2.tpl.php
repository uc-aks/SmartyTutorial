<?php
/* Smarty version 4.3.1, created on 2023-05-18 08:10:09
  from 'E:\Xampp\htdocs\demoSmarty\second\index2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6465c1413346c9_48116614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6586783e9b39ef3b7f9ab0689d13abed438d2412' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\second\\index2.tpl',
      1 => 1684390204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc.tpl' => 1,
  ),
),false)) {
function content_6465c1413346c9_48116614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'show' => 
  array (
    'compiled_filepath' => 'E:\\Xampp\\htdocs\\demoSmarty\\second\\templates_c\\6586783e9b39ef3b7f9ab0689d13abed438d2412_0.file.index2.tpl.php',
    'uid' => '6586783e9b39ef3b7f9ab0689d13abed438d2412',
    'call_name' => 'smarty_template_function_show_8236346956465c141281428_63861874',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3562879856465c141316157_70602507', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* smarty_template_function_show_8236346956465c141281428_63861874 */
if (!function_exists('smarty_template_function_show_8236346956465c141281428_63861874')) {
function smarty_template_function_show_8236346956465c141281428_63861874(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

this is function
<?php
}}
/*/ smarty_template_function_show_8236346956465c141281428_63861874 */
/* {block 'content'} */
class Block_3562879856465c141316157_70602507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3562879856465c141316157_70602507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

This is index2.tpl
<br>
<?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 11+1 - (1) : 1-(11)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 1, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php }
}
?>
<hr>

<h1 style="color:yellow;"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'show', array(), true);?>
</h1>
<?php $_smarty_tpl->_subTemplateRender('file:inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
