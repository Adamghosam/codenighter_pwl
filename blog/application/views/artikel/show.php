<?php foreach ($blog as $art) : ?>
    <div class="container">

        <div class="card mt-4 ">
            <h5 class="card-header"><?= $art['date']; ?></h5>
            <div class="card-body">
                <h5 class="card-title"><?= $art['title']; ?></h5>
                <h6 class="card-title"><?= $art['url']; ?></h6>
                <img src="<?= $art['cover']; ?>" alt="">
                <div class="container ml-4 mr-4">
                    <p class="card-text"><?= $art['content']; ?></p>
                </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>