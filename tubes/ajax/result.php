<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$anime =  query("   SELECT * FROM anime
                    WHERE 
                    nama_anime LIKE '%$keyword%' OR 
                    studio LIKE '%$keyword%' OR
                    episode LIKE '%$keyword%' OR
                    status_anime LIKE '%$keyword%' OR
                    rilis LIKE '%$keyword%' 
                ");

?>
<?php foreach ($anime as $ani) : ?>
    <a href="view.php?id=<?= $ani["id"]; ?>">
        <div class="mt-3 mr-3">
            <img class="rounded shadow" src="assets/img/<?= $ani["poster_anime"]; ?>" width="200px" height="300px">
            <div class="card-body pr-3">
                <h6 class="card-text row"><small class="text-muted"><?= $ani["studio"]; ?></small></h6>
                <h5 class="card-title row"><?= $ani["nama_anime"]; ?></h5>
                <p class="card-text row"><small class="text-muted"><?= $ani["rilis"]; ?></small></p>
            </div>
        </div>
    </a>
<?php endforeach; ?>