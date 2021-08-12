<?php include "components/header-alternative.php" ?>

<div class="session pb-5">
    <div class="container">
        <div class="d-flex align-items-center">
            <h1 class="font-35 color-blue text-uppercase line me-3">Como fazer parte dessa força?</h1>
            <a href="index.php" class="font-16 color-green fw-bold text-uppercase text-decoration-none">Home</a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="font-16 color-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere felis eros, eu tempus magna porttitor nec. Etiam luctus justo ac dolor posuere, quis rutrum tellus iaculis. Aliquam ut massa sit amet turpis dignissim ullamcorper. Suspendisse suscipit volutpat metus, non lobortis lib</p>
            </div>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="img/bg-contato.jpg" alt="Homem" class="img-fluid w-100 rounded mb-5">
            </div>
            <div class="col-lg-6">
                <p class="font-25 color-blue fw-bold text-uppercase">Faça seu pré cadastro</p>
                <p class="font-16 color-black">Após o cadastro ser realizado, nós entraremos em contato para passar mais informações. Desde já agradecemos seu apoio!</p>
            
                <form class="">
                    <div class="mb-3">
                        <label for="input-nome" class="form-label text-uppercase">nome *</label>
                        <input type="text" class="form-control" id="input-nome" placeholder="Digite aqui">
                    </div>
                    <div class="mb-3">
                        <label for="input-email" class="form-label text-uppercase">e-mail *</label>
                        <input type="email" class="form-control" id="input-email" placeholder="Digite aqui">
                    </div>
                    <div class="mb-3">
                        <label for="input-telefone" class="form-label text-uppercase">telefone *</label>
                        <input type="text" class="form-control" id="input-telefone" placeholder="Digite aqui">
                    </div>
                    <div class="mb-3">
                        <label for="input-cidade" class="form-label text-uppercase">cidade *</label>
                        <select class="form-select" id="input-cidade">
                            <option selected>Selecione</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <button type="submit" class="btn bg-green color-light text-uppercase py-2 w-100">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "components/footer.php" ?>