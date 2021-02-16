<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 02:04:42
  from 'C:\xampp74\htdocs\amelia\app\views\Panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b1a2a020263_90571618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc2de8cb04c3132b6363ce8c6db281cf1dcc01b' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Panel.tpl',
      1 => 1613436919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b1a2a020263_90571618 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summernote</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="summernote"><p>Hello Summernote</p></div>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
