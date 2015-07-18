<?php /* Smarty version 3.1.24, created on 2015-07-16 15:37:28
         compiled from "C:/wamp/www/CI/application/views/test.html" */ ?>
<?php
/*%%SmartyHeaderCode:2126655a7cfb88fc8e6_06774510%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed5415a46d71fc135106f502147495709f7693f' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126655a7cfb88fc8e6_06774510',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7cfb89537f5_60015978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7cfb89537f5_60015978')) {
function content_55a7cfb89537f5_60015978 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2126655a7cfb88fc8e6_06774510';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>