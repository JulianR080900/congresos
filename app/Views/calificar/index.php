<!-- header-->
<?php echo view('templates/header')?>
<!-- header -->
<style>
    body{
        background-color: #363a36;
        overflow-x: hidden;
    }

    .titulo{
        margin-top: 10%;
    }
    
    .formulario{
        margin-top: 5%;
        border: 1px solid;
        box-shadow: 5px 10px;
        border-radius: 5%;
        padding: 3%;
        background-color: #fff;
    }


    h1{
        color: white;
    }
    
    /*div#particles-js {*/
    /*    position: absolute;*/
    /*    z-index: -1;*/
    /*    top: 10px;*/
        
    /*}*/
    
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
    
    
    /*============== RESPONSIVO ================*/
      @media screen and (max-width: 640PX) {
        #particles-js{
            display:none;   
        }
        
        div#formulario {
        position: absolute;
        width: 80%;
        left: 50%;
        transform: translateX(-50%);
        }
    }
    
    @media screen and (min-width: 640PX) and (max-width: 1080px){
    
        #particles-js{
            display:none;   
        }
        
        div#formulario {
        position: absolute;
        /*position: relative;*/
        width: 60%;
        left: 50%;
        transform: translateX(-50%);
        }
    
    }
    
    @media screen and (min-width: 1080px) {
        #particles-js{
            display:block;   
        }
        
        div#formulario {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
}
    
</style>

<!--m-0 vh-100-->
<body class='row justify-content-center align-items-center text-center'> 

    <div id="inicio">
        <div class="titulo">
        <h1>¡BIENVENIDOS A VIVE REDESLA!</h1>
    </div>
    <div class='col-auto text-center formulario' id="formulario">
        <form action='<?= base_url() ?>/verificarCodigo' method='POST' id="formGafete">
            <h3>Clave de gafete</h3>
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Clave</span>
              <input type="text" class="form-control" placeholder="Clave de gafete" aria-label="Codigo" aria-describedby="basic-addon1" id="clave" name='clave'>
            </div>
            <div class="d-grid gap-2">
              <!--<button class='btn btn-dark btn-block' type='submit'>Comprobar</button>-->
              <button class='btn btn-block text-white' style="background-color:#232423" type='button' onclick="existeGafete()">Comprobar</button>
            </div>
        </form>
    </div>
    </div>
    <div id="particles-js"></div>
    <!-- footer-->
    <?php echo view('templates/footer')?>
    <!-- footer -->

<script src="<?= base_url("public/js/landing/particles.js") ?>" charset="utf-8"></script>
<script>

particlesJS.load('particles-js', '<?= base_url('public/js/landing/particlesjs-config.json') ?>', function() {
                    //$("#particles-js").append('<div class="wrapper astonish animated fadeInDown"><h1><strong>VIVE</strong>REDESLA</h1><h2>Sección de cursos y congresos</h2></div>')
              });
    function existeGafete(){
        var clave = $("#clave").val().trim();
        
        if(clave == ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ingrese los datos',
            });
        }else{
            $.ajax({
                url:"./validarGafete",
                type: "POST",
                dataType: "json",
                data: {
                    clave: clave
                },
                success: function(resp){
                    console.log(resp);
                    window.location.assign(resp); 
                },
                error: function(err) {
                    console.log(err);
                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops... algo ocurrio',
                        text: err.responseText
                    })
                }
            })
        }
    }
</script>



</body>
</html>