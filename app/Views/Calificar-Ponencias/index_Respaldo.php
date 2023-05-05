<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Califiicar</title>
  <!--<link href="<?php #echo base_url("public/css/styleResponsive.css")?>" rel="stylesheet" type="text/css">-->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>
  <!-- header-->
  <?php //echo view('templates/header')
  ?>
  <!-- header -->
  <style type="text/css">
    /* BASIC */
  :root{
    --Releem: #4f30b3;
    --ReleemLigero: #6b42ed;
    --Relayn: #FF9015;
    --RelaynLigero: #FB9E36;
  }
    body {
      font-family: "Poppins", sans-serif;
      background-color: var(--Relayn);
      /*background-image: url(<?php echo base_url("public/backgrounds/image-cmfnbmto.png") ?>);*/
      overflow-x: hidden;
      overflow-y: hidden;
    }

    a {
      color: #92badd;
      display: inline-block;
      text-decoration: none;
      font-weight: 400;
    }

    h2 {
      text-align: center;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      margin: 40px 8px 10px 8px;
      color: #cccccc;
    }

    body,
html {
    height: 100%
}

#particles-js canvas {
    display: block;
    vertical-align: bottom;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
    transition: opacity .8s ease, transform 1.4s ease
}

#particles-js {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: -10;
    top: 0;
    left: 0
}



    /* STRUCTURE */

    .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      min-height: 100%;
      /*padding: 20px;*/
      /*solucion*/
      /*padding: 243px;*/
    }

    #formContent {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 450px;
      /*position: relative;*/
      padding: 0px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      text-align: center;
      /*top: -1in;*/
      position: absolute;
      top: 10%;
    }

    #formFooter {
      background-color: #f6f6f6;
      border-top: 1px solid #dce8f1;
      padding: 25px;
      text-align: center;
      -webkit-border-radius: 0 0 10px 10px;
      border-radius: 0 0 10px 10px;
    }



    /* TABS */

    h2.inactive {
      color: #cccccc;
    }

    h2.active {
      color: #0d0d0d;
      border-bottom: 2px solid #5fbae9;
    }



    /* FORM TYPOGRAPHY*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
      background-color: var(--Relayn);
      border: none;
      color: white;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 5px 20px 40px 20px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
      background-color: var(--RelaynLigero);
      cursor: pointer;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }

    input[type=text] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    input[type=text]:placeholder {
      color: #cccccc;
    }




    input[type=email] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }

    input[type=email]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    input[type=email]:placeholder {
      color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .fadeIn {
      opacity: 0;
      -webkit-animation: fadeIn ease-in 1;
      -moz-animation: fadeIn ease-in 1;
      animation: fadeIn ease-in 1;

      -webkit-animation-fill-mode: forwards;
      -moz-animation-fill-mode: forwards;
      animation-fill-mode: forwards;

      -webkit-animation-duration: 1s;
      -moz-animation-duration: 1s;
      animation-duration: 1s;
    }

    .fadeIn.first {
      -webkit-animation-delay: 0.4s;
      -moz-animation-delay: 0.4s;
      animation-delay: 0.4s;
    }

    .fadeIn.second {
      -webkit-animation-delay: 0.6s;
      -moz-animation-delay: 0.6s;
      animation-delay: 0.6s;
    }

    .fadeIn.third {
      -webkit-animation-delay: 0.8s;
      -moz-animation-delay: 0.8s;
      animation-delay: 0.8s;
    }

    .fadeIn.fourth {
      -webkit-animation-delay: 1s;
      -moz-animation-delay: 1s;
      animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
      display: block;
      left: 0;
      bottom: -10px;
      width: 0;
      height: 2px;
      background-color: #56baed;
      content: "";
      transition: width 0.2s;
    }

    .underlineHover:hover {
      color: #0d0d0d;
    }

    .underlineHover:hover:after {
      width: 100%;
    }



    /* OTHERS */

    *:focus {
      outline: none;
    }

    #icon {
      width: 60%;
    }
    
    /*============== RESPONSIVO ================*/
    @media screen and (max-width: 1080px) {
        #particles-js{
            display:none;
        }

    }
    
    /*@media screen and (min-width: 640PX) and (max-width: 1080px){*/
    /*    #particles-js{*/
    /*        display:none;*/
    /*    }*/
    /*}*/
    
    @media screen and (min-width: 1080px) {
        
    }


  </style>
</head>

<body>
  <div class="row" id="img">
    <div class="col-md-6 text-center">
      <img src="<?php echo base_url("public/img/Logo CUC.png") ?>" style="width: 40%; padding-top:30px" />
    </div>
    <div class="col-md-6 text-center">
      <img src="<?php echo base_url("public/img/logos_redes/Relayn.png") ?>" style="width: 45%; padding-top:30px" />
    </div>
  
  </div>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <form action="<?php echo base_url('calificacion_ponencia'); ?>" method="POST" style="margin-top: 40px;" id="form-calificar">
        <h3>Calificar ponencias</h3>
        <hr>
        <span>Ingrese correctamente los datos proporcionados</span>
        <input type="text" id="clave_gafete" class="fadeIn second" name="clave_gafete" placeholder="Clave de gafete" required>
        <input type="text" id="codigo_ponencia" class="fadeIn third" name="codigo_ponencia" placeholder="Código de la ponencia" required 
        <?php
        if(isset($ponencia)){
            echo 'value="'.$ponencia.'"';
        }
        ?>>
        <!--<input type="hidden" id="correoOculto" name="correoOculto"><br>-->
        <p style="font-size: 10px;">¿No identifica dónde está su clave de gafete o el código de ponencia? <a href="https://drive.google.com/file/d/1a0fw6EXscawm4nt_U5ZcJ1qEQ4QCW5zG/view">Dé clic aquí para ver el manual.</a></p>
        <input type="button" class="fadeIn fourth" value="Siguiente" onclick="verificarDatos()">
      </form>
    </div>
  </div>

  <!--Modal-->
  <div class="modal fade" id="ModalCorreo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Calificar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h6>Favor de escribir el correo que utiliza para ingresar a <a href="https://redesla.net/redesla/">Redesla.net</a>, ya que si no lo es no podrá obtener su constancia de asistencia.</h6>
          <form id="formModal">
            <div class="form-group justify-content-md-center">
              <!--<label for="recipient-name" class="col-form-label">Escribe tu correo electronico:</label>-->
              <input type="email" id="correo" name="correo" placeholder="Correo electronico">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModal()">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="enviarDatosModal()">Siguiente</button>
        </div>
      </div>
    </div>
  </div>
  <div id="particles-js"></div>



  <!-- footer-->
  <?php echo view('templates/footer') ?>
  <!-- footer -->
  <script src="<?= base_url("public/js/landing/particles.js") ?>" charset="utf-8"></script>
  <script>
    particlesJS.load('particles-js', '<?= base_url('public/js/landing/Relayn/particlesjs-config.json') ?>', function() {
      //$("#particles-js").append('<div class="wrapper astonish animated fadeInDown"><h1><strong>VIVE</strong>REDESLA</h1><h2>Sección de cursos y congresos</h2></div>')
    });
  </script>
  <script>
    function verificarDatos() {

      var gafete = document.getElementById("clave_gafete").value;
      var ponencia = document.getElementById("codigo_ponencia").value;

      if (gafete == "" || ponencia == "") {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Ingrese los datos',
        });


      } else {
        $.ajax({
          url: "PonenciaCalController/validar_Datos_Calificacion",
          type: "POST",
          data: $("#form-calificar").serialize(),
          success: function(resp) {
              
              var resultado = JSON.parse(resp);
              console.log(resultado);
              
              if(resultado == "No_existen_datos"){ //LOS DATOS NO COINCIDEN EN LA BASE DE DATOS
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Los datos no existen',
                  })
              }
              else if(resultado == "Ponencia_califiacada"){ // LA PONENCIA YA HA SIDO CALIFICADA
                  Swal.fire({
                    icon: 'info',
                    title: 'Oops...',
                    text: 'La ponencia ya ha sido calificada',
                  })
              }
              
              else if(resultado == "Calificar_ponencia_1"){ // ES LA PRIMERA VES QUE UN PARTICIPANTE CALIFICARA UNA PONENCIA Y APARECERA EL MODAL PARA INGRESAR SU CORREO ELECTRONICO 
                  $('#ModalCorreo').modal('show');
              }
              else if(resultado == "Calificar_ponencia"){ // REDIRECCIONARA AL APARTADO DE CALIFICAR PONENCIA
                    $('#form-calificar').submit();
              }

            /*if (resultado == "datosVacios") {

              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Los datos no existen',
              })
            } else if (resultado == "CalificacionVacia") {
              $('#ModalCorreo').modal('show');
              $("#gafetemodal").val(gafete);
              $("#ponenciamodal").val(ponencia);
            } else if (resultado == "ponencia_calificada") {

              Swal.fire({
                icon: 'info',
                title: 'Oops...',
                text: 'La ponencia ya ha sido calificada',
              })

            } else {
              $('#correoOculto').val(resultado);
              $('#form-calificar').submit();
            }*/

          },
          statusCode: {
            400: function(xhr) {

            }
          }
        })
      }
    }  
    
    
    function cerrarModal() {
      $('#ModalCorreo').modal('hide');
      $('#correo').val('');
    }
    
    
    function enviarDatosModal() {
      var correoModal = $("#correo").val();
      var gafete = $("#clave_gafete").val();
      console.log("hola");
      if (correoModal == "") {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Ingrese los datos',
        });
      }else {
        $.ajax({
          url: "PonenciaCalController/validarCorreo",
          type: "POST",
          data:{
            "correo":correoModal,
            "gafete":gafete
          },success: function(resp) {
            var resultado = JSON.parse(resp);
            // console.log(resultado);

            if (resultado == 'NoExisteCorreo') {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El correo no existe en la base de datos',
              });
            } else {
            //   var correo = $("#correoOculto").val(correoModal);
              $('#form-calificar').submit();
            }

          },
          statusCode: {
            400: function(xhr) {

            }
          }
        })
      }
    }
  </script>
  <script>
    /*function verificarDatos() {

      var gafete = document.getElementById("clave_gafete").value;
      var ponencia = document.getElementById("codigo_ponencia").value;

      if (gafete == "" || ponencia == "") {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Ingrese los datos',
        });


      } else {
        $.ajax({
          url: "MainController/validadDatosCalificar",
          type: "POST",
          data: $("#form-calificar").serialize(),
          success: function(resp) {
              
              var resultado = JSON.parse(resp);

            if (resultado == "datosVacios") {

              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Los datos no existen',
              })
            } else if (resultado == "CalificacionVacia") {
              $('#ModalCorreo').modal('show');
              $("#gafetemodal").val(gafete);
              $("#ponenciamodal").val(ponencia);
            } else if (resultado == "ponencia_calificada") {

              Swal.fire({
                icon: 'info',
                title: 'Oops...',
                text: 'La ponencia ya ha sido calificada',
              })

            } else {
              $('#correoOculto').val(resultado);
              $('#form-calificar').submit();
            }

          },
          statusCode: {
            400: function(xhr) {

            }
          }
        })
      }
    }

    function cerrarModal() {
      $('#ModalCorreo').modal('hide');
      $('#correo').val('');
    }

    function enviarDatosModal() {
      var correoModal = $("#correo").val();
      if (correoModal == "") {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Ingrese los datos',
        });
      } else {


        $.ajax({
          url: "PonenciaCalController/validarCorreo",
          type: "POST",
          data: $("#formModal").serialize(),
          success: function(resp) {
            var resultado = JSON.parse(resp);
            console.log(resultado);

            if (resultado == 'NoExisteCorreo') {
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El correo no existe en la base de datos',
              });
            } else {
              var correo = $("#correoOculto").val(correoModal);
              $('#form-calificar').submit();
            }

          },
          statusCode: {
            400: function(xhr) {

            }
          }
        })
      }
    }*/
  </script>
</body>

</html>