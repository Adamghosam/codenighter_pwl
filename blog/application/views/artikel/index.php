<div class="container mt-4">
    <h2>Artikel terbaru</h2>
    <h5 class="card-subtitle mb-2 text-muted">Apa saja sih yang baru di blog adam ghosam ?</h5>
    <div class="row">
        <?php foreach ($blog as $art) : ?>
            <div class="col-sm-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $art['title'] ?></h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- /// -->

    </div>


</div>