<?php
include 'header.php';
?>

<div class="hero-section text-center bg-primary text-white py-5">
    <h1>Thrift Jaket dan Hoodie</h1>
    <p class="lead">Temukan jaket dan hoodie bekas berkualitas tinggi dengan harga terjangkau.</p>
    <a href="#gallery" class="btn btn-light btn-lg">Lihat Selanjutnya</a>
</div>

<div id="gallery" class="container py-5">
    <h2 class="text-center mb-4">Galeri Produk</h2>
    <div class="row">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/images/jacket<?= $i ?>.jpg" class="card-img-top" alt="Jaket <?= $i ?>">
                    <div class="card-body">
                        <h5 class="card-title">Jaket <?= $i ?></h5>
                        <button class="btn btn-primary" onclick="openPopup('jacket<?= $i ?>')">Lihat Detail</button>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php
include 'footer.php';
?>
