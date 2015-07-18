<?php /* Smarty version 3.1.24, created on 2015-07-16 15:49:17
         compiled from "C:/wamp/www/CI/application/views/test7.html" */ ?>
<?php
/*%%SmartyHeaderCode:367855a7d27d270de2_94620489%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5341f45d0576053692491e45128b4b4df8e4aded' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test7.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367855a7d27d270de2_94620489',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7d27d2d2958_88591717',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7d27d2d2958_88591717')) {
function content_55a7d27d2d2958_88591717 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '367855a7d27d270de2_94620489';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>