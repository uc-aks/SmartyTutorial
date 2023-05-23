<?php
/* Smarty version 4.3.1, created on 2023-05-17 12:38:24
  from 'E:\Xampp\htdocs\demoSmarty\fourth\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6464aea02c93f2_40307974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f64ff1336b2e949488d427035a4cb97d0eb805' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\fourth\\index.tpl',
      1 => 1684301040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6464aea02c93f2_40307974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\demoSmarty\\fourth\\smarty\\libs\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>

<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>

<br>
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['articleTitle']->value, ENT_QUOTES, 'UTF-8', true);?>

<br>
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['articleTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
    <br>
<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <br>
<a href="?title=<?php echo rawurlencode((string)$_smarty_tpl->tpl_vars['articleTitle']->value);?>
">click here</a>
<br>
<a
href="?title=%27Stiff%20Opposition%20Expected%20to%20Casketless%20Funeral%20Plan%27">click here</a>
<br>
<?php echo preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['articleTitle']->value);?>

<br>
<a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, "hex");?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, "hexentity");?>
</a>
<br>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, 'mail');?>
    <a href="mailto:%62%6f%..snip..%65%74">&#x62;&#x6f;&#x62..snip..&#x65;&#x74;</a>
<br>
<?php echo smarty_modifier_escape('mail@example.com', 'mail');?>

smarty [AT] example [DOT] com

<?php }
}
