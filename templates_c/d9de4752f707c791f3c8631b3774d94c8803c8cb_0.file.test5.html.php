<?php /* Smarty version 3.1.24, created on 2015-07-16 15:41:57
         compiled from "C:/wamp/www/CI/application/views/test5.html" */ ?>
<?php
/*%%SmartyHeaderCode:3196855a7d0c53ffba9_91384800%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9de4752f707c791f3c8631b3774d94c8803c8cb' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test5.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3196855a7d0c53ffba9_91384800',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7d0c5450661_66564946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7d0c5450661_66564946')) {
function content_55a7d0c5450661_66564946 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3196855a7d0c53ffba9_91384800';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>