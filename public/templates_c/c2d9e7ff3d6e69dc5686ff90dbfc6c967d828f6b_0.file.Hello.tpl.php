<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-26 21:06:21
  from 'C:\xampp74\htdocs\AS\projekt-amelia\amelia\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6010763d764863_54426742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2d9e7ff3d6e69dc5686ff90dbfc6c967d828f6b' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\AS\\projekt-amelia\\amelia\\app\\views\\Hello.tpl',
      1 => 1524337902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6010763d764863_54426742 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework</title>
</head>

<body>
    
    My value: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>

</body>

</html><?php }
}
