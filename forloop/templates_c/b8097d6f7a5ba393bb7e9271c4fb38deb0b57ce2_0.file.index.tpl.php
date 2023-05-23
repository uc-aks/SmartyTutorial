<?php
/* Smarty version 4.3.1, created on 2023-05-19 08:19:16
  from 'E:\Xampp\htdocs\demoSmarty\forloop\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646714e45c5f77_16525902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8097d6f7a5ba393bb7e9271c4fb38deb0b57ce2' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\demoSmarty\\forloop\\index.tpl',
      1 => 1684313038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646714e45c5f77_16525902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'hello' => 
  array (
    'compiled_filepath' => 'E:\\Xampp\\htdocs\\demoSmarty\\forloop\\templates_c\\b8097d6f7a5ba393bb7e9271c4fb38deb0b57ce2_0.file.index.tpl.php',
    'uid' => 'b8097d6f7a5ba393bb7e9271c4fb38deb0b57ce2',
    'call_name' => 'smarty_template_function_hello_433326244646714e3e69c57_19556750',
  ),
));
?>
<ul>
<?php
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['a']->step = 1;$_smarty_tpl->tpl_vars['a']->total = (int) ceil(($_smarty_tpl->tpl_vars['a']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['a']->step));
if ($_smarty_tpl->tpl_vars['a']->total > 0) {
for ($_smarty_tpl->tpl_vars['a']->value = 0, $_smarty_tpl->tpl_vars['a']->iteration = 1;$_smarty_tpl->tpl_vars['a']->iteration <= $_smarty_tpl->tpl_vars['a']->total;$_smarty_tpl->tpl_vars['a']->value += $_smarty_tpl->tpl_vars['a']->step, $_smarty_tpl->tpl_vars['a']->iteration++) {
$_smarty_tpl->tpl_vars['a']->first = $_smarty_tpl->tpl_vars['a']->iteration === 1;$_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration === $_smarty_tpl->tpl_vars['a']->total;?>
    <?php
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['b']->step = 1;$_smarty_tpl->tpl_vars['b']->total = (int) ceil(($_smarty_tpl->tpl_vars['b']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['b']->step));
if ($_smarty_tpl->tpl_vars['b']->total > 0) {
for ($_smarty_tpl->tpl_vars['b']->value = 0, $_smarty_tpl->tpl_vars['b']->iteration = 1;$_smarty_tpl->tpl_vars['b']->iteration <= $_smarty_tpl->tpl_vars['b']->total;$_smarty_tpl->tpl_vars['b']->value += $_smarty_tpl->tpl_vars['b']->step, $_smarty_tpl->tpl_vars['b']->iteration++) {
$_smarty_tpl->tpl_vars['b']->first = $_smarty_tpl->tpl_vars['b']->iteration === 1;$_smarty_tpl->tpl_vars['b']->last = $_smarty_tpl->tpl_vars['b']->iteration === $_smarty_tpl->tpl_vars['b']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->tpl_vars['a']->value][$_smarty_tpl->tpl_vars['b']->value];?>
</li>
    <?php }
}
}
}
?>
</ul>
<br/>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myPeople']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
   <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<br>
<br>
<br>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hello', array(), true);?>

<hr>
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'hello', array(), true);?>




<?php }
/* smarty_template_function_hello_433326244646714e3e69c57_19556750 */
if (!function_exists('smarty_template_function_hello_433326244646714e3e69c57_19556750')) {
function smarty_template_function_hello_433326244646714e3e69c57_19556750(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

This is my function
<?php
}}
/*/ smarty_template_function_hello_433326244646714e3e69c57_19556750 */
}
