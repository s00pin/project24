<div class="full-page" style="background-image: url('https://image.tmdb.org/t/p/original/<?= esc($show['background']) ?>'); background-size: cover; background-position: center; "></div>
<div class="container details-container my-2">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/<?= esc($show['poster']) ?>" class="img-fluid bi mt-4 mb-3 rounded" alt="Poster">
        </div>
        <div class="col-md-8">
            <div class="p-4  bg-body-tertiary rounded-3">
                <h1 class="text-body-emphasis text-center"><?= esc($show['title']) ?></h1>
                <p class=" mx-1 fs-5 text-muted">
                    <?= esc($show['overview']) ?>
                </p>
                
            </div>
            
        </div>
        <div class="col-lg-12 mx-auto fs-5 text-muted  bg-body-tertiary rounded-3 mt-2">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p><strong>Release Dates:</strong> <?= esc($show['begin_date']) ?> - <?= esc($show['end_date']) ?></p>
                        <p><strong>Genre:</strong> <?= esc($show['genre']) ?></p>
                        <p><strong>Language:</strong> <?= esc($show['language']) ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Runtime:</strong> <?= esc($show['runtime']) ?> minutes</p>
                        <p><strong>Seasons:</strong> <?= esc($show['seasons']) ?></p>
                        <p><strong>Episodes:</strong> <?= esc($show['episodes']) ?></p>
                        
                    </div>
                </div>
            </div>
    </div>
</div>
