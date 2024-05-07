<div class="full-page" style="background-image: url('https://image.tmdb.org/t/p/original/<?= esc($media['background_image']) ?>'); background-size: cover; background-position: center;"></div>

<div class="container details-container my-5">
    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="https://image.tmdb.org/t/p/w300_and_h450_bestv2/<?= esc($media['poster_image']) ?>" class="img-fluid bi mt-4 mb-3 rounded" alt="Poster">
        </div>
        <div class="col-md-8">
            <div class="p-4  bg-body-tertiary rounded-3">
                <h1 class="text-body-emphasis text-center"><?= esc($media['title']) ?></h1>
                <p class=" mx-1 fs-5 text-muted">
                <?= esc($media['overview']) ?>
                </p>
                
            </div>
            
        </div>
        <div class="col-lg-12 mx-auto fs-5 text-muted  bg-body-tertiary rounded-3 mt-2" style="bacground-color: #F5E8DD;">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p><strong>Release Date:</strong><?= esc($media['release_date']) ?></p>
                        <p><strong>Language:</strong> <?= esc($media['original_language']) ?></p>
                        <p><strong>Genre:</strong> <?= esc($media['genre']) ?></p>  
                    </div>
                    
                </div>
            </div>
    </div>
</div>
