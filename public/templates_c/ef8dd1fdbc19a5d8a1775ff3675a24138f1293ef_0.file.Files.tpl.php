<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-23 22:57:49
  from 'C:\xampp74\htdocs\amelia\app\views\Files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60357a5d69b7e7_57432992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef8dd1fdbc19a5d8a1775ff3675a24138f1293ef' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Files.tpl',
      1 => 1614117469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60357a5d69b7e7_57432992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37786820560357a5d692864_30912727', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block 'body'} */
class Block_37786820560357a5d692864_30912727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_37786820560357a5d692864_30912727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section class="wrapper style1 align-center">
        <div class="inner">
            <h2>Pliki</h2>
            <p>Moje różne <strong>materiały dydaktyczne</strong> do ściągnięcia.</p>
            <div class="items style1 medium onscroll-fade-in">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
                <section>
                    <span class="icon style2 major fa-gem"></span>
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
downloadable/<?php echo $_smarty_tpl->tpl_vars['file']->value["path"];?>
" download>
                        <h3><?php echo $_smarty_tpl->tpl_vars['file']->value["title"];?>
</h3>
                    </a>
                    <p><?php echo $_smarty_tpl->tpl_vars['file']->value["description"];?>
</p>
                </section>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </section>

<?php
}
}
/* {/block 'body'} */
}
