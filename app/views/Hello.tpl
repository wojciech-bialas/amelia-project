<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pl">
<head>
    <title>{block name="title"}Klaudia Rożyńska{/block}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

{*  theme  *}
    <link rel="stylesheet" href="{url}assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{url}assets/css/noscript.css" /></noscript>

{*  navbar  *}
    <link rel="stylesheet" type="text/css" href="{url}assets/css/navbar.css" />
</head>
<body class="is-preload">

    <nav id="navbar-primary" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                <div class="nav navbar-nav">
                    <div><a href="{url}hello">Main</a></div>
                    <div><a href="{url}files">Pliki</a></div>
                    <div><a href="{url}blog">Blog</a></div>
                    <div><a href="{url}contact">Kontakt</a></div>
                    {if core\RoleUtils::inRole("author")}
                        <div><a href="{url}panel">Panel</a></div>
                        <div><a href="{url}logout">Wyloguj</a></div>
                    {/if}
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

{block name=body}
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
            <img src="{url}images/klau-main.jpg" alt="Zdjęcie tytułowej logopedki" />
        </div>
    </section>
</div>
{/block}

    <footer>
        <div class="inner align-center">
            <p>2021 &copy; wojciech.bialas@protonmail.com</p>
        </div>
    </footer>

<!-- Scripts -->
<script src="{url}assets/js/jquery.min.js"></script>
<script src="{url}assets/js/jquery.scrollex.min.js"></script>
<script src="{url}assets/js/jquery.scrolly.min.js"></script>
<script src="{url}assets/js/browser.min.js"></script>
<script src="{url}assets/js/breakpoints.min.js"></script>
<script src="{url}assets/js/util.js"></script>
<script src="{url}assets/js/main.js"></script>

</body>
</html>