<?php /* Smarty version 3.1.24, created on 2015-07-16 15:34:25
         compiled from "C:/wamp/www/CIwu/application/views/test2.html" */ ?>
<?php
/*%%SmartyHeaderCode:1549455a7cf01242b83_91690868%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff88c605f81813f176d8fbce5746472077f2438d' => 
    array (
      0 => 'C:/wamp/www/CIwu/application/views/test2.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1549455a7cf01242b83_91690868',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7cf01295d97_86092346',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7cf01295d97_86092346')) {
function content_55a7cf01295d97_86092346 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1549455a7cf01242b83_91690868';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>