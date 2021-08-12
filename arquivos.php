<?php include "components/header-alternative.php" ?>

<div class="session pb-5">
    <div class="container">
        <div class="d-flex align-items-center">
            <h1 class="font-35 color-blue text-uppercase line me-3">Arquivos</h1>
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
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="col-lg-12">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex p-2 ps-4 align-items-center justify-content-around bg-gray mb-3">
                            <i class="bi bi-file-earmark-pdf font-25 color-yellow"></i>
                            <p class="font-16 color-green fw-bold mb-0">Movimento Norte Forte MS é apresentado para lideranças de São Gabriel do Oeste</p>
                            <p class="font-16 color-gray mb-0">27.11.2019</p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<?php include "components/footer.php" ?>