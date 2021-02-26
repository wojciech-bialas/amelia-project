<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 16:13:08
  from 'C:\xampp74\htdocs\amelia\app\views\Editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6039100424b415_12598885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a1d36bd543b3e0cd696d19702303417fa4f9826' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Editor.tpl',
      1 => 1614117469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6039100424b415_12598885 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Write an article</title>
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

<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
create_post">
    <label for="art-title"></label>
    <input id="art-title" type="text" name="art-title">
    <label for="summernote"></label>
    <textarea id="summernote" name="editordata"></textarea>
    <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-envelope"></span>Dodaj post
    </button>
</form>

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
