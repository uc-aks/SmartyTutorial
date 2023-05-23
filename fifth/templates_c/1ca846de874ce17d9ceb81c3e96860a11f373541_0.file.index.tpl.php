<?php
/* Smarty version 4.3.1, created on 2023-05-19 08:19:13
  from 'E:\Xampp\htdocs\demoSmarty\fifth\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646714e143e852_19665815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ca846de874ce17d9ceb81c3e96860a11f373541' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\fifth\\index.tpl',
      1 => 1684319928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646714e143e852_19665815 (Smarty_Internal_Template $_smarty_tpl) {
echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['var']->value);?>
<br>
<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<br/>
<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['articleTitle']->value);?>

<br/>
<?php echo preg_replace('!^!m',str_repeat(' ',10),$_smarty_tpl->tpl_vars['articleTitle']->value);?>

<br/>
<?php echo preg_replace('!^!m',str_repeat("\t",1),$_smarty_tpl->tpl_vars['articleTitle']->value);?>

<br>
<?php $_smarty_tpl->_assignInScope('num', '19');
echo $_smarty_tpl->tpl_vars['num']->value;?>


<?php }
}
