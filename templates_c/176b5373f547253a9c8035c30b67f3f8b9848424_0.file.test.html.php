<?php /* Smarty version 3.1.24, created on 2015-07-16 15:29:35
         compiled from "C:/wamp/www/CIwu/application/views/test.html" */ ?>
<?php
/*%%SmartyHeaderCode:1504955a7cddfcfa806_65815343%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '176b5373f547253a9c8035c30b67f3f8b9848424' => 
    array (
      0 => 'C:/wamp/www/CIwu/application/views/test.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1504955a7cddfcfa806_65815343',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7cddfd4f7a3_15252972',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7cddfd4f7a3_15252972')) {
function content_55a7cddfd4f7a3_15252972 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1504955a7cddfcfa806_65815343';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>