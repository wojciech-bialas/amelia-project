<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-31 18:47:58
  from 'C:\xampp74\htdocs\amelia\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6016ed4e5054b6_92305947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e406a23233cd30396f11d0470ea2a4eee62d9c19' => 
    array (
      0 => 'C:\\xampp74\\htdocs\\amelia\\app\\views\\Hello.tpl',
      1 => 1612115277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6016ed4e5054b6_92305947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pl">
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2593415466016ed4e500225_01107086', "title");
?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/css/noscript.css" /></noscript>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/css/navbar.css" />
</head>
<body class="is-preload">

    <nav id="navbar-primary" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                <div class="nav navbar-nav">
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/hello">Main</a></div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/files">Pliki</a></div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/blog">Blog</a></div>
                    <div><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/contact">Kontakt</a></div>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4476008516016ed4e504346_30603976', 'body');
?>


<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block "title"} */
class Block_2593415466016ed4e500225_01107086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2593415466016ed4e500225_01107086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Klaudia Rożyńska<?php
}
}
/* {/block "title"} */
/* {block 'body'} */
class Block_4476008516016ed4e504346_30603976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4476008516016ed4e504346_30603976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Wrapper -->
<div id="wrapper" class="divided">

    <!-- One -->
    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
            <h1>Klaudia Rożyńska</h1>
            <p class="major">Logopedka, terapeutka, polonistka.
                Chcę się dzielić moją wiedzą, doświadczeniem i pomysłami.</p>
            <ul class="icons">
                <li><a href="https://instagram.com/logoklaudia" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://www.facebook.com/LogoKlaudia-185672888198084" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
            </ul>
        </div>
        <div class="image">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/images/banner.jpg" alt="" />
        </div>
    </section>
</div>
<?php
}
}
/* {/block 'body'} */
}
