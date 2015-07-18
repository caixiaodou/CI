<?php /* Smarty version 3.1.24, created on 2015-07-16 23:52:03
         compiled from "C:/wamp/www/CI/application/views/test9.html" */ ?>
<?php
/*%%SmartyHeaderCode:2047155a7d323547ef0_93189384%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215dd96c220c2f5a6668d42ad329c0c936702a1e' => 
    array (
      0 => 'C:/wamp/www/CI/application/views/test9.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047155a7d323547ef0_93189384',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7d32359b0d3_85386748',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7d32359b0d3_85386748')) {
function content_55a7d32359b0d3_85386748 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2047155a7d323547ef0_93189384';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>