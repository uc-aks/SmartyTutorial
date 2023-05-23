<?php
/* Smarty version 4.3.1, created on 2023-05-22 07:05:38
  from 'E:\Xampp\htdocs\demoSmarty\first\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646af8221f0969_89468048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f41b3c0096a142f4fd2b332f880e81170171512' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\first\\index.tpl',
      1 => 1684731932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646af8221f0969_89468048 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contacts']->value, 'con');
$_smarty_tpl->tpl_vars['con']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['con']->value) {
$_smarty_tpl->tpl_vars['con']->do_else = false;
?>
<ul><li><?php echo $_smarty_tpl->tpl_vars['con']->value['fax'];?>
</li>
<li><?php echo $_smarty_tpl->tpl_vars['con']->value['email'];?>
</li>
<li><?php echo $_smarty_tpl->tpl_vars['con']->value['phone']['home'];?>
</li>
<li><?php echo $_smarty_tpl->tpl_vars['con']->value['phone']['cell'];?>
</li></ul>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br><br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul><li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li></ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
