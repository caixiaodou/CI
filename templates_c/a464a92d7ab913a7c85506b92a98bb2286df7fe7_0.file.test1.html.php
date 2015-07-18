<?php /* Smarty version 3.1.24, created on 2015-07-16 15:31:05
         compiled from "C:/wamp/www/CIwu/application/views/test1.html" */ ?>
<?php
/*%%SmartyHeaderCode:3015855a7ce395fd1b7_91057791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a464a92d7ab913a7c85506b92a98bb2286df7fe7' => 
    array (
      0 => 'C:/wamp/www/CIwu/application/views/test1.html',
      1 => 1437056778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3015855a7ce395fd1b7_91057791',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a7ce3964dd17_30619893',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a7ce3964dd17_30619893')) {
function content_55a7ce3964dd17_30619893 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3015855a7ce395fd1b7_91057791';
?>
<html>
    <body>
        这是 <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
 测试
    </body>
</html><?php }
}
?>