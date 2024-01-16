<?php require_once __DIR__ . '/../db.php'; ?>

<main>
    <div class="container-lg">
        <?php foreach ($movies as $movie) : ?>
            <div class="row">
                <div class="col-4 p-5">
                    <div>
                        <img src="<?php echo $movie->poster ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-8 p-4">
                    <div class="text-white film-card">
                        <h6 class="text-white-50 fw-normal">FILM</h6>
                        <h1> <?php echo $movie->name ?></h1>
                        <div>
                            <span class="me-3">
                                <?php echo $movie->duration_hour_minutes['hour'] ?> ore
                                <?php echo $movie->duration_hour_minutes['minutes'] ?> minuti
                            </span>

                            <span class="me-3">
                                <?php echo $movie->year ?>
                            </span>
                            <span class="me-3 genre-link">
                                <?php foreach ($movie->category as $genre) : ?>
                                    <a href="#" class="me-2 link-offset-2 link-underline link-underline-opacity-0 text-white-50">
                                        <?php echo $genre ?>
                                    </a>
                                <?php endforeach; ?>
                            </span>
                        </div>
                        <p>
                            <?php echo $movie->info ?>
                        </p>
                        <div>
                            <button class="btn btn-danger me-3">Wath</button>
                            <button type="button" class="btn btn-outline-light">Add to my list</button>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>