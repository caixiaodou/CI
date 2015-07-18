<?php /* Smarty version 3.1.24, created on 2015-07-16 15:47:10
         compiled from "C:/wamp/www/CI/application/views/test6.html" */ ?>
<?php
/*%%SmartyHeaderCode:706555a7d1fe3fd045_56176839%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9427837af6b55a5b4e3f9873e41a561a3dc05c5' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test6.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706555a7d1fe3fd045_56176839',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7d1fe4593a4_72653700',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7d1fe4593a4_72653700')) {
function content_55a7d1fe4593a4_72653700 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '706555a7d1fe3fd045_56176839';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>