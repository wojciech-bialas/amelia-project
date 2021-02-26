<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-20 21:13:20
  from 'C:\xampp74\htdocs\amelia\app\views\Article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60316d6052d177_12853130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24724176eada5b6d59d939624c58078c46f21ceb' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Article.tpl',
      1 => 1613851999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60316d6052d177_12853130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174218557160316d60524ec6_41130843', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block 'body'} */
class Block_174218557160316d60524ec6_41130843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_174218557160316d60524ec6_41130843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
        <section class="wrapper style1 align-center">
            <div class="inner">
                <h2><?php echo $_smarty_tpl->tpl_vars['article']->value["title"];?>
</h2>
                <h6><?php echo $_smarty_tpl->tpl_vars['article']->value["time"];?>
</h6>
                <p><?php echo $_smarty_tpl->tpl_vars['article']->value["body"];?>
</p>
            </div>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'body'} */
}
