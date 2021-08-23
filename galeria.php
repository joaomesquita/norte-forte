<?php include "components/header-alternative.php" ?>

<div class="session pb-5">
    <div class="container">
        <div class="d-flex align-items-center">
            <h1 class="font-35 color-blue text-uppercase line me-3">Galeria</h1>
            <a href="index.php" class="font-16 color-green fw-bold text-uppercase text-decoration-none">Home</a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="font-16 color-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere felis eros, eu tempus </p>
            </div>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="font-25 color-green text-uppercase line mb-4">Fotos</h1>
            </div>
        </div>

        <div class="row gy-5">
            <?php for ($i = 0; $i < 1; $i++) { ?>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="img/noticia1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="font-14 color-gray">27.11.2019</p>
                            <p class="font-18 color-black">Movimento Norte Forte MS é apresentado para lideranças de São Gabriel do Oeste...</p>
                            <a href="galeria-interna.php" class="btn  font-15 bg-green color-light text-uppercase stretched-link">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="img/noticia2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="font-14 color-gray">27.11.2019</p>
                            <p class="font-18 color-black">O plano contempla ações para fortalecer a Região Norte até 2030...</p>
                            <a href="galeria-interna.php" class="btn  font-15 bg-green color-light text-uppercase stretched-link">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="img/noticia3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="font-14 color-gray">27.11.2019</p>
                            <p class="font-18 color-black">Obras em municípios da região norte do Estado chegam a R$ R$ 539 milhões...</p>
                            <a href="galeria-interna.php" class="btn  font-15 bg-green color-light text-uppercase stretched-link">Ver mais</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="font-25 color-green text-uppercase line mb-4">Vídeos</h1>
            </div>
        </div>

        <div class="row gy-5">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="col-lg-4">
                    <div class="card">
                        <a data-fancybox="" href="https://www.youtube.com/watch?v=FNnBgxgakU4">
                            <img src="img/noticia1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <p class="font-14 color-gray">27.11.2019</p>
                            <p class="font-18 color-black mb-0">Título do Vídeo</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include "components/footer.php" ?>