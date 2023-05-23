<?php
/* Smarty version 4.3.1, created on 2023-05-22 08:01:20
  from 'E:\Xampp\htdocs\demoSmarty\ex2\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646b05306e9cb6_40786692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bef5c3b2f79b2c8ccb44a47ad41bd003308d4e7' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\ex2\\index.tpl',
      1 => 1684735277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646b05306e9cb6_40786692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['val']->step = $_smarty_tpl->tpl_vars['step']->value;$_smarty_tpl->tpl_vars['val']->total = (int) ceil(($_smarty_tpl->tpl_vars['val']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['val']->step));
if ($_smarty_tpl->tpl_vars['val']->total > 0) {
for ($_smarty_tpl->tpl_vars['val']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['val']->iteration = 1;$_smarty_tpl->tpl_vars['val']->iteration <= $_smarty_tpl->tpl_vars['val']->total;$_smarty_tpl->tpl_vars['val']->value += $_smarty_tpl->tpl_vars['val']->step, $_smarty_tpl->tpl_vars['val']->iteration++) {
$_smarty_tpl->tpl_vars['val']->first = $_smarty_tpl->tpl_vars['val']->iteration === 1;$_smarty_tpl->tpl_vars['val']->last = $_smarty_tpl->tpl_vars['val']->iteration === $_smarty_tpl->tpl_vars['val']->total;?> 
<?php echo $_smarty_tpl->tpl_vars['val']->value;?>

<?php }
}
}
}
