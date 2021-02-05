{extends file="Hello.tpl"}

{block name=body}

    <section class="wrapper style1 align-center">
        <div class="inner">
            <h2>Pliki</h2>
            <p>Moje różne <strong>materiały dydaktyczne</strong> do ściągnięcia.</p>
            <div class="items style1 medium onscroll-fade-in">
                {foreach $list as $file}
                <section>
                    <span class="icon style2 major fa-gem"></span>
                    <a href="{$url}/downloadable/{$file["path"]}" download>
                        <h3>{$file["title"]}</h3>
                    </a>
                    <p>{$file["description"]}</p>
                </section>
                {/foreach}
            </div>
        </div>
    </section>

{/block}