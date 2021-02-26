<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 18:54:11
  from 'C:\xampp74\htdocs\amelia\app\views\Upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603935c3763682_33437394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e627e8a81e40877f4dd1db33a918823038e6ad3c' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Upload.tpl',
      1 => 1614362046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603935c3763682_33437394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1528346301603935c3740cf2_46760578', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block 'body'} */
class Block_1528346301603935c3740cf2_46760578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1528346301603935c3740cf2_46760578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form enctype="multipart/form-data" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
create_file" method="POST">
        <input type="text" name="title">
        <input type="text" name="description">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
        <input type="file" name="userfile" />
        <input type="submit" value="Prześlij plik" />
    </form>

<?php
}
}
/* {/block 'body'} */
}
