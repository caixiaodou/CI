<?php /* Smarty version 3.1.24, created on 2015-07-16 15:39:24
         compiled from "C:/wamp/www/CI/application/views/test1.html" */ ?>
<?php
/*%%SmartyHeaderCode:278755a7d02cad4773_04832292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0461fb46518b6916acf1d8f03d0c3cc8973e826' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test1.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278755a7d02cad4773_04832292',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7d02cb32791_76276997',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7d02cb32791_76276997')) {
function content_55a7d02cb32791_76276997 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '278755a7d02cad4773_04832292';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>