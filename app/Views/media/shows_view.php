<div class="full-page" style="background-image: url('https://image.tmdb.org/t/p/original/<?= esc($show['background']) ?>'); background-size: cover; background-position: center;"></div>

<h2><?= esc($show['title']) ?></h2>
<div class="main">
    <p>
        <?= esc($show['overview']) ?>
        <br>
        <?= esc($show['poster']) ?>
        <br>
        <?= esc($show['overview']) ?>
        <br>
        <?= esc($show['begin_date']) ?> - <?= esc($show['end_date']) ?>
        <br>
        <?= esc($show['genre']) ?>
        <br>
        <?= esc($show['language']) ?>
        <br>
        <?= esc($show['background']) ?>
        <br>
        <?= esc($show['runtime']) ?>
        <br>
        Seasons: <?= esc($show['seasons']) ?>
        <br>
        Episodes: <?= esc($show['episodes']) ?>
        <br>
        ID: <?= esc($show['id']) ?>
    </p>
</div>
