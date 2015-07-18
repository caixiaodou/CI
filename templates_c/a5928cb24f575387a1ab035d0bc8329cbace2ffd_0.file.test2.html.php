<?php /* Smarty version 3.1.24, created on 2015-07-16 15:36:58
         compiled from "C:/wamp/www/CI/application/views/test2.html" */ ?>
<?php
/*%%SmartyHeaderCode:2934155a7cf9a858433_30628489%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5928cb24f575387a1ab035d0bc8329cbace2ffd' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test2.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2934155a7cf9a858433_30628489',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7cf9a8ccbf7_67264870',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7cf9a8ccbf7_67264870')) {
function content_55a7cf9a8ccbf7_67264870 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2934155a7cf9a858433_30628489';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>