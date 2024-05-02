<div class="full-page" style="background-image: url('https://image.tmdb.org/t/p/original/<?= esc($media['background_image']) ?>'); background-size: cover; background-position: center;"></div>

<h2><?= esc($media['title']) ?></h2>
<div class="main">
<p>
    <?= esc($media['overview']) ?>
    <?= esc($media['poster_image']) ?>
    <br>
    <?= esc($media['overview']) ?>
    <br>
    <?= esc($media['release_date']) ?>
    <br>
    <?= esc($media['genre']) ?>
    <br>
    <?= esc($media['original_language']) ?>
    <br>
    <?= esc($media['background_image']) ?>
    <br>
          
</p>   
</div>