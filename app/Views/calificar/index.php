<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Calificar ponencias REDESLA</title>
  <link href="<?= base_url("public/css/calificar/index.css") ?>" rel="stylesheet" type="text/css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/cd008eda05.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@popperjs/core@2" crossorigin="anonymous"></script>

  <!--<script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>-->
  <!-- header-->
  <?php //echo view('templates/header')
  ?>

</head>

<body class="body_<?= $red ?>">

  <div class="outter">
    <section id="section_logos">
      <div class="row img">
        <?php
        if ($red != 'Relen_Relep') {
        ?>
          <div class="col-md-4 col-sm-12">
            <img class="w-75" src="<?= base_url('public/img/logos_redes/' . $red . '.png') ?>" alt="Logo <?= $red ?>">
          </div>
          <div class="col-md-4 col-sm-12">
            <img class="w-75" src="<?= base_url('public/img/calificar/Congreso_' . $red . '.png') ?>" alt="Logo <?= $red ?>">
          </div>
          <div class="col-md-4 col-sm-12">
            <img class="w-75" src="<?= base_url('public/img/calificar/' . $sede . '.png') ?>" alt="Logo <?= $sede ?>">
          </div>
        <?php
        } else {
        ?>
          <div style="flex-direction: column;" class="col-md-4">
            <img src="<?= base_url('public/img/logos_redes/Relep.png') ?>" alt="" class="w-75">
            <img src="<?= base_url('public/img/logos_redes/Relen.png') ?>" alt="" class="w-75">
          </div>
          <div class="col-md-4" style="flex-direction: column;">
            <img class="w-75" src="<?= base_url('public/img/calificar/'.$anio.'/congreso_relep.png') ?>" alt="Congreso Relep">
            <img class="w-75" src="<?= base_url('public/img/calificar/'.$anio.'/coloquio_relep.png') ?>" alt="Coloquio Relep">
            <img class="w-75" src="<?= base_url('public/img/calificar/'.$anio.'/congreso_relen.png') ?>" alt="Congreso Relen">
          </div>
          <div class="col-md-4">
            <img src="<?= base_url('public/img/calificar/'.$sede.'.png') ?>" alt="" class="w-75">
            <img src="<?= base_url('/public/img/vive.png') ?>" alt="" class="w-75">
          </div>
        <?php
        }
        ?>
      </div>
      <hr>
      <div class="row img">
        <h2 class="text-center">Calificar ponencias</h2>
      </div>
    </section>
  </div>

  <div class="outter">
    <section>
      <div class="row">
        <div class="col-md-8">
          <img src="<?= base_url('public/img/calificar/feedback.svg') ?>" alt="" class="w-75">
        </div>
        <div class="col-md-4">
          <form id="accesos" action="./formulario/evaluacion" method="post">
            <div class="form-group">
              <h3>Calificar ponencias</h3>
            </div>
            <div class="form-group">
              <label for="">Clave de su gafete <span class="text-danger">*</span></label>
              <input type="text" id="clave_gafete" class="form-control" name="clave_gafete" placeholder="Clave de su gafete" required>
            </div>
            <div class="form-group">
              <label for="">Ponencia a evaluar <a type="button" data-toggle="popover" title="Serán proporcionados por el moderador de su salón al finalizar la presentación de cada ponente" data-content=""><i class="fa-solid fa-circle-info text-warning"></i></a> <span class="text-danger">*</span></label>


              <input type="text" id="codigo_ponencia" class="form-control" name="codigo_ponencia" placeholder="Código de la ponencia" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-block btn-dark" id="btnAccesos">Verificar</button>
            </div>
            <div class="form-group">
              <p style="font-size: 10px;">¿No identifica dónde está su clave de gafete o el código de ponencia? <a target="_blank" href="https://drive.google.com/file/d/1CdhpLOsiqQ8BmKtbTzVjfdkzYU9DkT-q/view">Dé clic aquí para ver el manual.</a></p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
  <script src="<?= base_url('public/js/calificar/index.js') ?>"></script>
  <script>
        $(document).ready(function() {
            // Función para obtener el valor de la clave desde la URL
            function obtenerClaveDesdeURL() {
                var urlParams = new URLSearchParams(window.location.search);
                return urlParams.get('clave');
            }

            // Obtener la clave desde la URL
            var claveDesdeURL = obtenerClaveDesdeURL();

            // Establecer la clave en el input utilizando jQuery
            $('#codigo_ponencia').val(claveDesdeURL);
        });
    </script>
</body>

</html>