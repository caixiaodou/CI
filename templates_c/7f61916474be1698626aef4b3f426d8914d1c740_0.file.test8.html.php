<?php /* Smarty version 3.1.24, created on 2015-07-16 23:51:21
         compiled from "C:/wamp/www/CI/application/views/test8.html" */ ?>
<?php
/*%%SmartyHeaderCode:2262455a7d2f9dc3bb3_74712154%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f61916474be1698626aef4b3f426d8914d1c740' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test8.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2262455a7d2f9dc3bb3_74712154',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7d2fa005ec7_63728946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7d2fa005ec7_63728946')) {
function content_55a7d2fa005ec7_63728946 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2262455a7d2f9dc3bb3_74712154';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>