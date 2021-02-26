<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-25 23:36:45
  from 'C:\xampp74\htdocs\amelia\app\views\Panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6038267d7ab1f4_23171666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc2de8cb04c3132b6363ce8c6db281cf1dcc01b' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Panel.tpl',
      1 => 1614292411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038267d7ab1f4_23171666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12203163516038267d7a8677_32285933', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block 'body'} */
class Block_12203163516038267d7a8677_32285933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12203163516038267d7a8677_32285933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="wrapper style1 align-center">
        <div class="inner align-center">
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
create_post">Utwórz nowy artykuł na bloga</a>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
create_file">Dodaj nowy plik na stronę</a>
        </div>
    </section>

<?php
}
}
/* {/block 'body'} */
}
