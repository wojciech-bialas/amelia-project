<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-09 15:58:11
  from 'C:\xampp74\htdocs\amelia\app\views\Blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e855f3242803_40116511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdebbc8e221805c02939e60481152d931100695b' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Blog.tpl',
      1 => 1625839089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e855f3242803_40116511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90495485060e855f3238542_86079905', "stylesheet");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82050677760e855f323a680_37612703', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Hello.tpl");
}
/* {block "stylesheet"} */
class Block_90495485060e855f3238542_86079905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheet' => 
  array (
    0 => 'Block_90495485060e855f3238542_86079905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
assets/css/popupAjax.css" />
<?php
}
}
/* {/block "stylesheet"} */
/* {block 'body'} */
class Block_82050677760e855f323a680_37612703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_82050677760e855f323a680_37612703',
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
                <br>
                <button id="<?php echo $_smarty_tpl->tpl_vars['article']->value["ID"];?>
">Czytaj dalej . . . </button>
                <br>
                <br>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array(),$_smarty_tpl ) );?>
article/<?php echo $_smarty_tpl->tpl_vars['article']->value["ID"];?>
" class="button icon solid fa-desktop">
                    Przejdź do artykułu
                </a>
            </div>
        </section>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo '<script'; ?>
>
        let buttons = document.getElementsByTagName("button");

        for (let i = 0; i < buttons.length; i++) {
            buttons.item(i).addEventListener('click', function loadText(){

                let id = buttons.item(i).getAttribute('id');
                let xhr = new XMLHttpRequest();
                xhr.open('GET', ('article/'+id), true);

                xhr.onload = function(){
                    if (this.status === 200) {
                        let div = document.createElement('div');
                        let paragraph = document.createElement('p');
                        div.classList.add('popupAjax');

                        let regexp = /(?<=<p>)(.*)(?=<\/p>)/gm
                        let p = regexp.exec(this.responseText);

                        let popupBody = document.createTextNode(p[0]);
                        paragraph.appendChild(popupBody);
                        div.appendChild(paragraph);
                        document.body.appendChild(div);
                    }
                }
                xhr.send();
            });
        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'body'} */
}
