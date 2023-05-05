<?php

//echo 'Estas en el inicio, su clave de gafete es: '.session('clave_gafete').' y la red es: '.session('red');

?>


<!-- header-->
<?php echo view('templates/header') ?>
<!-- header -->

<?php
switch(session('red')){
    
    case 'Releem':
        $cantidad = 5;
        break;
    case 'Relep':
        $cantidad = 8;
        break;
    case 'Relayn':
        $cantidad = 6;
        break;
}
?>

<body class='m-0 vh-100 row justify-content-center align-items-center'>
  <style>
    :root{
      --Releem: #655088;
      --Relep: #00ae3e;
      --Relen: #c61a1f;
      --Relayn: #df3e0c;
      --Relmo: #e85297;
    }

    body{
      background-image: url(<?= base_url('public/backgrounds/'.session('red').'.png') ?>);
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

    #imprimirpdf{
      background-color: #ff0000;
    }

    #gafete,#gafete2{
      background-color: var(--<?= session('red') ?>);
    }
    
    a.btn.btn-danger.text-right {
        /*width: 20%;*/
        left: 50%;
        position: absolute;
        transform: translateX(-50%);
    }
    

    
    /*============== RESPONSIVO ================*/
      @media screen and (max-width: 640PX) {
        
        a.btn.btn-danger.text-right {
            width: 20%;
        }
    }
    
    @media screen and (min-width: 640PX) and (max-width: 1080px){
    
        a.btn.btn-danger.text-right {
            width: 20%;
        }
    
    }
    
    @media screen and (min-width: 1080px) {
        a.btn.btn-danger.text-right {
            width: 10%;
        }
    }
    
  </style>
  <div class="container" style="position:relative">
    
    <div class="col d-flex justify-content-center">
      <div class="card bg-light mb-3" style="max-width: 42rem; margin-top:3%">
        <div class="card-header">
          <b><h3><?php echo session("congreso"); ?></h3></b>
        </div>


        <div class="card-body">Favor de verificar sus datos:<p></p>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Clave de gafete</th>
                <th scope="col">Nombre</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row"><input type="text" disabled="" class="form-control" value="<?php echo session('clave_gafete') ?>"></td>
                <td><input type="text" disabled="" id="nombre" class="form-control" value="<?php echo session('nombre') ?>"></td>
                
              </tr>
            </tbody>
          </table>
        
        <input type='text' value="<?= session('clave_gafete') ?>" hidden id='clave_gafete'>
          <?php
          if (session('oyente') == 1) {
            //MOSTRAMOS UNA TABLA DE OYENTE
            ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check">
                    <label class="form-check-label" for="check">
                    Acepto condiciones para solicitar constancia de participación.
                    </label>
                </div>
            <?php
            
          } else {
              
          ?>

            <table class="table">
              <thead>
                <tr>
                  <th>El nombre de su ponencia es:</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><textarea class="form-control" id="tituloPonencia" name="tituloponencia" rows="2" disabled="true" value=""><?php echo session("nombre_ponencia") ?></textarea></td>
                </tr>
              </tbody>
            </table>

            <div class="form-group">
              <p>Muy importante:</p>
              <p>Para poder acceder al diploma de asistencia al congreso, es <b>indispensable</b> que participes en las ponencias de tus colegas y las evalúes. En caso de no evaluar al menos <?=  $cantidad ?> ponencias, podrás recibir tu diploma de ponente pero no el de asistencia al congreso.</p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">
                  Acepto condiciones para solicitar constancia de participación.
                </label>
              </div>
            </div>
          <?php
          }
          ?>

          <!--<p class="card-text"><b>Tipo de registro</b></p>
                    <input type="text" id="tipo" value="oyente" hidden>
                    <p class="card-text">Oyente</p>-->
          <hr>
          Mis datos son incorrectos <a href="https://wa.link/m1j8fr"><i class="fas fa-info-circle" style="color: #ffbb33"></i>Solucionar</a>
          <!--CAMBIAR-->
          <hr>
          <div class="row">
            <a href="#" id="gafete" class="btn btn-info btn-block text-white">Ir a VIVE REDESLA <i class="fas fa-arrow-alt-circle-right"></i></a>
          </div>
          <br>
          <div class="row">
            <button type="button" id="imprimirpdf" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-block text-white"><i class="fas fa-id-card"></i> Imprimir gafete</button>
          </div>
        </div>
      </div>
    </div>
    <a href="<?= base_url('logout') ?>" class="btn btn-danger text-right"><i class="fas fa-sign-out-alt"></i> Salir</a>
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
  
    $("#gafete, #gafete2").on("click", function() {

      var bool = $("#check").is(":checked");
      if (bool == false) {
        swal.fire({
          icon: 'warning',
          title: 'Favor de aceptar las condiciones para continuar'
        })
      } else {
          window.location.assign("<?= base_url("congreso/".session('red')) ?>") 
      }
    });
      /*
          var correo = $("#correo").val();
          var clave_gafete = $("#clave_gafete").val();
        $.ajax({
          url: "MainController/validarCorreo",
          type: "POST",
          data: {correo:correo,clave_gafete:clave_gafete},
          success: function(resp) {
              var resultado = JSON.parse(resp);
              if(resultado == 'success'){
                 window.location.assign("<?= base_url("congreso/".session('red')) ?>") 
              }else{
                  swal.fire({
                      icon:'warning',
                      title:'Favor de ingresar el correo electrónico correctamente'
                  })
              }
          },
          statusCode: {
            400: function(xhr) {

            }
          }
        })
        //window.location.assign("<?= base_url("congreso/".session('red')) ?>")
      }

    });
    */
  </script>


  <!-- footer-->
  <?php echo view('templates/footer') ?>
  <!-- footer -->


</body>

</html>