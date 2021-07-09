{extends file="Hello.tpl"}

{block name="stylesheet"}
    <link rel="stylesheet" href="{url}assets/css/popupAjax.css" />
{/block}

{block name=body}

    {foreach $articles as $article}
        <section class="wrapper style1 align-center">
            <div class="inner">
                <h2>{$article["title"]}</h2>
                <h6>{$article["time"]}</h6>
                <p>{$article["abbreviation"]}</p>
                <br>
                <button id="{$article["ID"]}">Czytaj dalej . . . </button>
                <br>
                <br>
                <a href="{url}article/{$article["ID"]}" class="button icon solid fa-desktop">
                    Przejdź do artykułu
                </a>
            </div>
        </section>

    {/foreach}

    <script>
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
    </script>

{/block}