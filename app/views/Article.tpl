{extends file="Hello.tpl"}

{block name=body}
    {foreach $articles as $article}
        <section class="wrapper style1 align-center">
            <div class="inner">
                <h2>{$article["title"]}</h2>
                <h6>{$article["time"]}</h6>
                <p>{$article["body"]}</p>
{*                <ul class="actions">*}
{*                    <li>*}
{*                        <a href="{$url}/article/{$article["ID"]}"*}
{*                           class="button icon solid fa-desktop">*}
{*                            Czytaj dalej...*}
{*                        </a>*}
{*                    </li>*}
{*                </ul>*}
            </div>
        </section>
    {/foreach}
{/block}