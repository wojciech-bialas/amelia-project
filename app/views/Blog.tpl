{extends file="Hello.tpl"}

{block name=body}

    {foreach $articles as $article}
        <section class="wrapper style1 align-center">
            <div class="inner">
                <h2>{$article["title"]}</h2>
                <p>{$article["body"]}</p>
            </div>
        </section>
    {/foreach}


{/block}