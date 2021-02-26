<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-25 23:26:18
  from 'C:\xampp74\htdocs\amelia\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6038240aeed888_92519225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6094ac5d2f5ef246ae21e2174a7a80776aa99ef3' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Login.tpl',
      1 => 1614291978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6038240aeed888_92519225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6894884906038240aee2e08_22467726', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9003547326038240aee3693_78812517', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block 'title'} */
class Block_6894884906038240aee2e08_22467726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6894884906038240aee2e08_22467726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9003547326038240aee3693_78812517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9003547326038240aee3693_78812517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, core\App::getMessages()->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <h3><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</h3>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<section>
    <header>
        <h3>Log in form</h3>
    </header>
    <div class="content">
        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
check_login">
            <div class="fields">
                <div class="field half">
                    <label for="login">login</label>
                    <input type="text" name="login" id="login" value="" />
                </div>
                <div class="field half">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" value="" />
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" name="submit" id="submit" value="Send Message" /></li>
            </ul>
        </form>
    </div>
</section>

<?php
}
}
/* {/block 'body'} */
}
