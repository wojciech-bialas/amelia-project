{extends file="Hello.tpl"}

{block name=body}

    <form enctype="multipart/form-data" action="{url}create_file" method="POST">
        <input type="text" name="title">
        <input type="text" name="description">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
        <input type="file" name="userfile" />
        <input type="submit" value="Prześlij plik" />
    </form>

{/block}