<?php
    $trailerUrl = $_GET['trailer-url'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trailers</title>
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Trailer</h1>
        <iframe width="100%" height="600" src="<?= $trailerUrl ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</body>
<script src="./static/js/bootstrap.min.js"></script>
</html>

