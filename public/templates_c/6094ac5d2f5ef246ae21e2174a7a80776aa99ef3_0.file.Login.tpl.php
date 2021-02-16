<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 01:55:44
  from 'C:\xampp74\htdocs\amelia\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b1810ceef89_28321850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6094ac5d2f5ef246ae21e2174a7a80776aa99ef3' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Login.tpl',
      1 => 1613436868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b1810ceef89_28321850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19002018602b1810c1b396_86715162', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170046764602b1810c1c555_87206066', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block 'title'} */
class Block_19002018602b1810c1b396_86715162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19002018602b1810c1b396_86715162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_170046764602b1810c1c555_87206066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_170046764602b1810c1c555_87206066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
        <h3><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
    <?php }?>

<section>
    <header>
        <h3>Log in form</h3>
    </header>
    <div class="content">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/login">
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
