<?php
/* Smarty version 4.3.1, created on 2023-05-16 12:44:45
  from 'E:\Xampp\htdocs\demoSmarty\third\demo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64635e9d85a266_68671700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c29c6a5efb3771d2dad97337606aacafc1d1fc7' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\third\\demo.tpl',
      1 => 1684233882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64635e9d85a266_68671700 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="Submit" id="butt">Button</button><br>
<?php $_smarty_tpl->_assignInScope('num', sizeof($_smarty_tpl->tpl_vars['arr']->value));
echo $_smarty_tpl->tpl_vars['num']->value;?>
<br>

<style>
#butt{color:red;}
</style>

<?php echo '<script'; ?>
 language="javascript">
    var nm = document.getElementById("butt").addEventListener("click",dosomething);
    function dosomething() {
    console.log("foo is ");
  }
  dosomething();
<?php echo '</script'; ?>
>
<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
">click me</a>
<br>
<?php echo sizeof($_smarty_tpl->tpl_vars['arr']->value);
}
}
