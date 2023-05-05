<!-- header-->
<?php echo view('templates/header') ?>
<!-- header -->
<style>
    body {
        background-image: url(<?= base_url("public/img/Entrada_congreso_Relep.png") ?>);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }
    #video{
        margin-top: 20px;
    }

    #button{
        margin-top: 25%;
    }

</style>
<div class="container">
    <div class="row text-end" id="video">
        <div class="col-md-12">
            <video controls autoplay width="249">
                <source src="https://congreso.relep.org/wp-content/uploads/2021/08/Bienvenida-Plataforma-RELEP-1.mov" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="row text-center" id="button">
        <div class="col-md-12">
            <a href="<?= base_url('sala-general') ?>" class="btn btn-dark text-white">INGRESE AQUÍ</a>
        </div>
    </div>

</div>
<!-- footer-->
<?php echo view('templates/footer') ?>
<!-- footer -->