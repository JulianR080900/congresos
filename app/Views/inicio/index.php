<!-- header-->
<?php echo view('templates/header') ?>

<style>
    body {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(<?= base_url('public/backgrounds/' . $red . '.png') ?>);
    }

    section {
        padding: 50px;
        max-width: 900px;
        margin: 30px auto;
        background: white;
        background: white;
        backdrop-filter: blur(10px);
        box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
        border-radius: 20px;
        transition: transform 0.2s ease-in-out;
    }

    .outter {
        text-align: center;
        margin-top: 2.5rem;
        padding: 1rem;
    }
    #footer{
      position: absolute !important;
      padding: 0px !important;
    }
</style>
<!--m-0 vh-100-->

<body>

    <div class="outter">
        <section>
            <div class="row">
                <div class="col-md-6" id="imgs">
                    <img class="w-100" src="<?= base_url('/public/img/vive.png') ?>">
                    <img class="w-100" src="<?= base_url('public/img/calificar/' . $sede . '.png') ?>">
                </div>
                <div class="col-md-6 flex-center">
                    <hr>
                    <h3>Bienvenidos a</h3>
                    <h3>VIVE REDESLA</h3>
                    <div class="form-group">
                        <label for="">Ingrese su clave de gafete</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Gafete</span>
                            <input type="text" class="form-control" placeholder="Clave de gafete" aria-label="Codigo" aria-describedby="basic-addon1" id="clave" name='clave'>
                        </div>
                    </div>

                    <div class="row">
                        <button class='btn btn-block text-white' style="background-color:#232423" type='button' onclick="existeGafete()">Comprobar</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer-->
    <?php echo view('templates/footer') ?>
    <!-- footer -->


    <!-- IMPORTANTE -->
    <script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>
    <script src="public/js/landing/index.js"></script>

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
            $('#clave').val(claveDesdeURL);
        });
    </script>
    <!-- IMPORTANTE -->

</body>

</html>