<?php /* Smarty version 3.1.24, created on 2015-07-16 15:40:50
         compiled from "C:/wamp/www/CI/application/views/test4.html" */ ?>
<?php
/*%%SmartyHeaderCode:3115855a7d082a88d53_87710646%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f88ec9ee89e209c20bb28223493588d7b86d6c' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test4.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3115855a7d082a88d53_87710646',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7d082aef533_68675423',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7d082aef533_68675423')) {
function content_55a7d082aef533_68675423 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3115855a7d082a88d53_87710646';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>