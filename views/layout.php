
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Collection HAL</title>

    <!-- Bootstrap core CSS -->
    <link href="libraries/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="views/style.css" rel="stylesheet">
    <script src="libraries/jquery/dist/jquery.js"></script>
    <script src="libraries/wordcloud2.js/src/wordcloud2.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>

<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">Collection HAL</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- display view -->
<?php require __DIR__ . DIRECTORY_SEPARATOR . $view; ?>
</body>
</html>
