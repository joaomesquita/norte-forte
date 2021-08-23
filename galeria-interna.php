<?php include "components/header-alternative.php" ?>

<div class="session pb-5">
    <div class="container">
        <div class="d-flex align-items-center">
            <h1 class="font-35 color-blue text-uppercase line me-3 w-50">Movimento Norte Forte MS é apresentado para lideranças de São Gabriel do Oeste</h1>
            <a href="index.php" class="font-16 color-green fw-bold text-uppercase text-decoration-none">Home</a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="font-16 color-black mb-0">27.11.2019</p>
                <p class="font-16 color-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere felis eros, eu tempus </p>
            </div>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row gy-4">
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="col-lg-4">
                    <a data-fancybox="gallery" href="img/noticia1.jpg">
                        <img class="img-fluid rounded img-thumbnail" src="img/noticia1.jpg">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include "components/footer.php" ?>