<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Write an article</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

<form method="post" action="{url}create_post">
    <label for="art-title"></label>
    <input id="art-title" type="text" name="art-title">
    <label for="summernote"></label>
    <textarea id="summernote" name="editordata"></textarea>
    <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-envelope"></span>Dodaj post
    </button>
</form>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>
</html>