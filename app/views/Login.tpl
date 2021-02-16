{extends file="Hello.tpl"}

{block name=title}Logowanie{/block}

{block name=body}

    {if isset($message)}
        <h3>{$message}</h3>
    {/if}

<section>
    <header>
        <h3>Log in form</h3>
    </header>
    <div class="content">
        <form method="post" action="{$url}/login">
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

{/block}
