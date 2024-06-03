<?php
    $trailerUrl = $_GET['trailer-url'];
    require_once "./header.php"
?>
<div class="container-fluid p-5 bg-black text-light">
    <div class="container p-5">
        <iframe class="border border-danger border-5 rounded" width="100%" height="600" src="<?= $trailerUrl ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
<?php
require_once "./footer.php"
?>