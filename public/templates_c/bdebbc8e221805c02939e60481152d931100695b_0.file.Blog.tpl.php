<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-23 22:57:50
  from 'C:\xampp74\htdocs\amelia\app\views\Blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60357a5e56fb70_02871616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdebbc8e221805c02939e60481152d931100695b' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Blog.tpl',
      1 => 1614117469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60357a5e56fb70_02871616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20402218760357a5e566f33_68875031', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block 'body'} */
class Block_20402218760357a5e566f33_68875031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20402218760357a5e566f33_68875031',
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
                <p><?php echo $_smarty_tpl->tpl_vars['article']->value["abbreviation"];?>
</p>
                <ul class="actions">
                    <li>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
article/<?php echo $_smarty_tpl->tpl_vars['article']->value["ID"];?>
"
                           class="button icon solid fa-desktop">
                            Czytaj dalej...
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
/* {/block 'body'} */
}
