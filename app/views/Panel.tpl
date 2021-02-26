{extends file="Hello.tpl"}

{block name=body}

    <section class="wrapper style1 align-center">
        <div class="inner align-center">
            <a href="{url}create_post">Utwórz nowy artykuł na bloga</a>
            <a href="{url}create_file">Dodaj nowy plik na stronę</a>
        </div>
    </section>

{/block}