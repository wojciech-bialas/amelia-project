{extends file="Hello.tpl"}

{block name=title}Logowanie{/block}

{block name=body}

    {foreach core\App::getMessages()->getMessages() as $msg}
        <h3>{$msg->text}</h3>
    {/foreach}

<section>
    <header>
        <h3>Log in form</h3>
    </header>
    <div class="content">
        <form method="post" action="{url}check_login">
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
