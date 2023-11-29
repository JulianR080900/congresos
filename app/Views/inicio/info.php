<?php

//echo 'Estas en el inicio, su clave de gafete es: '.session('clave_gafete').' y la red es: '.session('red');

?>


<!-- header-->
<?php echo view('templates/header') ?>
<!-- header -->

<body class='m-0 vh-100 row justify-content-center align-items-center'>
  <style>
    :root {
      --Releem: #655088;
      --Relep: #00ae3e;
      --Relen: #c61a1f;
      --Relayn: #df3e0c;
      --Relmo: #e85297;
    }

    body {
      background-image: url(<?= base_url('public/backgrounds/' . session('red') . '.png') ?>);
    }

    .responsive-iframe {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
    }

    .content {
      position: relative;
      overflow: hidden;
      width: 100%;
      padding-top: 100%;
      /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
    }

    #imprimirpdf {
      background-color: #ff0000;
    }

    .retrato-circular {
      background-color: var(--<?= session('red') ?>);
    }

    #gafete,
    #gafete2 {
      background-color: var(--<?= session('red') ?>);
    }

    /*============== RESPONSIVO ================*/
    @media screen and (max-width: 640PX) {

      a.btn.btn-danger.text-right {
        width: 40%;
      }
    }

    @media screen and (min-width: 640PX) and (max-width: 1080px) {

      a.btn.btn-danger.text-right {
        width: auto;
      }

    }

    @media screen and (min-width: 1080px) {
      a.btn.btn-danger.text-right {
        width: auto;
      }
    }

    .flex-right{
      display: flex;
      align-items: right;
      justify-content: right;
    }

    #footer{
      position: relative !important;
    }
  </style>

  <div class="outter">
    <section>
      <div class="row flex-right">
        <a href="<?= base_url('logout') ?>" class="btn btn-danger text-right"><i class="fas fa-sign-out-alt"></i> Salir</a>
      </div>
      <div class="row">
        <center>
          <h3><?php echo session("congreso"); ?></h3>
        </center>

        <div class="columa-imagen mt-5 
          col-md-<?php if (session("oyente"))  echo "12";
                  else echo "6"; ?>">
          <div class="retrato-circular">
            <img src="<?php echo session('foto_usuario') ?>" alt="Foto de usuario...">
          </div>

          <div class="columna-texto-centrado mt-5">
            <h4>Nombre del participante</h4>
            <p><?php echo session("nombre") ?></p>
            <h4>Clave de su gafete</h4>
            <p><?php echo session("clave_gafete") ?></p>
          </div>
        </div>

        <!--Si es diferente de oyente se muestra la siguiente información-->
        <?php if (!session("oyente")) { ?>
          <div class="col-md-6 mt-5">
            <div class='row-info-container'>
              <h5>Universidad</h5>
              <p><?php echo session("nombre_universidad") ?></p>
            </div>
            <div class='row-info-container'>
              <h5>Clave de la universidad</h5>
              <p><?php echo session("claveCuerpo") ?></p>
            </div>
            <div class='row-info-container'>
              <h5>Tipo de asistencia al evento</h5>
              <p><?php echo session("tipo_asistencia") ?></p>
            </div>

            <?php if (session("oyente") !== 1) { ?>
              <div class='row-info-container'>
                <h5>ID de ponencia</h5>
                <p><?php echo session("id_ponencia") ?></p>
              </div>
            <?php } ?>

            <div class='row-info-container'>
              <h5>Ponencia</h5>
              <p><?php echo session("nombre_ponencia") ?></p>
            </div>
          </div>
        <?php } ?>

        <div class="col-md-12">
          <div class="form-group mt-5">
            <b>Muy importante:</b>
            <p>
              Para poder acceder a la Constancia de Asistencia del Congreso, es indispensable que participe en las ponencias de sus colegas y las evalúe. Debe tener en cuenta que podrá recibirlo evaluando por lo menos una ponencia y el diploma incluirá su porcentaje de participación; se requieren <b>8</b> para obtener un 100% de participación. La Constancia de Ponencia sólo podrá recibirla al haber presentado su ponencia en el día, lugar y modalidad asignada.
            </p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check">
              <label class="form-check-label" for="check">
                Acepto condiciones para solicitar constancia de participación.
              </label>
            </div>
            <div class="form-check">

              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="check2">
                Autorizo la captura y uso de mi imagen para la difusión y promoción de materiales que puedan ser utilizados exclusivamente por RedesLA.
              </label>
            </div>
          </div>

          <div class="mt-5">
            Mis datos son incorrectos <a href="https://wa.link/m1j8fr" target="_blank"><i class="fas fa-info-circle" style="color: #ffbb33"></i>Solucionar</a>
          </div>

          <div class="botones mt-5">
            <div class="row">
              <a href="#" id="gafete" class="btn btn-info btn-block text-white">Ir a VIVE REDESLA <i class="fas fa-arrow-alt-circle-right"></i></a>
            </div>
            <br>
            <div class="row">
              <button type="button" id="imprimirpdf" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-block text-white">Imprimir gafete <i class="fas fa-id-card"></i></button>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gafete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="content">
            <iframe class="responsive-iframe" src="<?= base_url('/imprimirPDF') ?>"></iframe>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <a href="#" id="gafete2" class="btn btn-info btn-block text-white">Ir a VIVE REDESLA <i class="fas fa-arrow-alt-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <script>
    let red = '<?= session('red_url') ?>'
    let anio = '<?= session('anio') ?>'
  </script>
  <script src="public/js/landing/info.js"></script>
  <script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js"  async></script>

  <!-- footer-->
  <?php echo view('templates/footer') ?>
  <!-- footer -->


</body>

</html>