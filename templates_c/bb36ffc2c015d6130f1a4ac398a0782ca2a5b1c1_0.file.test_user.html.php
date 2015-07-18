<?php /* Smarty version 3.1.24, created on 2015-07-17 10:18:38
         compiled from "C:/wamp/www/CI/application/views/test_user.html" */ ?>
<?php
/*%%SmartyHeaderCode:3207055a865ff001e66_48461122%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb36ffc2c015d6130f1a4ac398a0782ca2a5b1c1' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test_user.html',
      1 => 1437099514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3207055a865ff001e66_48461122',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a865ff062dc0_99823259',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a865ff062dc0_99823259')) {
function content_55a865ff062dc0_99823259 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3207055a865ff001e66_48461122';
?>
<html>
    <ul>
    	<?php
$_from = $_smarty_tpl->tpl_vars['user']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['foo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
$foreach_foo_Sav = $_smarty_tpl->tpl_vars['foo'];
?>
    	<li><?php echo $_smarty_tpl->tpl_vars['user']->value[0]->uname;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['user']->value[0]->upass;?>
</li>
    	<?php
$_smarty_tpl->tpl_vars['foo'] = $foreach_foo_Sav;
}
?>
    </ul>


</html>
    
    <?php }
}
?>