<?php
// $session = session();
// $datos = $session->get();

// if(empty($datos)){
//     echo 'vacio';
// }else{
//     echo 'hay datos';
// }
?>
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Calificar ponencias</title>
  <!--<script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>-->
  <style>
  
      /* BASIC */
  :root{
    --Releem: #4f30b3;
    --ReleemLigero: #6b42ed;
    --Relayn: #FF9015;
    --RelaynLigero: #FB9E36;
    --Relep: #232423;
    --RelepLigero: #363a36;
    --Relen: #232423;
    --RelenLigero: #363a36;
  }
    body {

      background-color: var(--Relep);

    }
    
    
    /*Button*/
    input[type=button],
    input[type=submit]{
      background-color: var(--Relep);
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
    input[type=submit]:hover{
      background-color: var(--RelepLigero);
      cursor: pointer;
    }

    input[type=button]:active,
    input[type=submit]:active {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }
    
    .desacuerdo{
        color:red;
    }
    
    .acuerdo{
        color: #059E45;
    }


   table, td, th {
    text-align:center;
  }
  
  .padding{
      padding-top: 5px;
  }
  
  /*============== RESPONSIVO ================*/
    @media screen and (max-width: 720px) {
        body {
          background-color: white;
        }
        
        .box{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            height: 100%;
            width: 100%;
        }
        
        
        /*table{*/
            
        /*    font-size:10px;*/
        /*}*/
        form{
            width:100%;
            height: 100%;
        }
    }
    
    @media screen and (min-width: 720px) and (max-width: 1280px){

        .box{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            height: 130%;
            width: 80%;
        }
        
        form{
            width:80%;
            margin: auto;
        }

    }
    
    @media screen and (min-width: 1280px) {
        .box{
            background: white;
            width: 100%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 1in;
        }
        
        form{
            width:100%;
            
        }
    }
</style>
</head>
<body>
  <div class="container box">
    <div class="row justify-content-md-center">
      <div class="col col-lg-2">

      </div>
        <div class="">
          <form action="<?php echo base_url('ordenamiento');?>" id="form-calificar" method="POST">
          <br>
          <br>
          
          
          <div class="d-flex justify-content-center">
            <b><?php echo "Nombre de la ponencia: ".session('nombre_ponencia') ?></b>
          </div>
          <br>
          
          <table class="table">

            <tbody>
              <tr>
                <td colspan="3">El objetivo de la investigación está claramente expresado y está enfocado a resolver alguna pregunta de investigación.</td>
              </tr>
              <tr>
                <td style="width:15%" class='desacuerdo'>Muy en desacuerdo</td>
                <td>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="1"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="2"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="3"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="4"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="5"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="6"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="7"></label>
                </td>
                <td style="width:15%" class='acuerdo'>Muy de acuerdo</td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <tbody>
              <tr>
                <td colspan="3">El investigador sustenta su propuesta en un marco de referencia teórico presentando las fronteras de la ciencia.</td>
              </tr>
              <tr>
                <td style="width:15%" class='desacuerdo'>Muy en desacuerdo</td>
                <td>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="1"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="2"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="3"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="4"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="5"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="6"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="7"></label>
                </td>
                <td style="width:15%" class='acuerdo'>Muy de acuerdo</td>
              </tr>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <td colspan="3">El investigador recogió datos empíricos para probar sus hipótesis o responder sus preguntas de investigación.</td>
                </tr>
                <tr>
                  <td style="width:15%" class='desacuerdo'>Muy en desacuerdo</td>
                  <td>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="1"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="2"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="3"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="4"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="5"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="6"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="7"></label>
                  </td>
                  <td style="width:15%" class='acuerdo'>Muy de acuerdo</td>
                </tr>
              </table>
              <table class="table">
                <tbody>
                  <tr>
                    <td colspan="3">Los análisis se realizaron de acuerdo con la metodología cuantitativa (probando hipótesis), cualitativa (saturando categorías) o con ambas.</td>
                  </tr>
                  <tr>
                    <td style="width:15%" class='desacuerdo'>Muy en desacuerdo</td>
                    <td>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="1"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="2"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="3"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="4"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="5"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="6"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="7"></label>
                    </td>
                    <td style="width:15%" class='acuerdo'>Muy de acuerdo</td>
                  </tr>
                </tbody>
                
              </table>
              <div class="d-flex justify-content-center">
                <!--<button type="submit" class="btn btn-success">Calificar</button>-->
                <!--<button type="button" class="btn btn-success" onClick="confirmarDatos()" style="background-color: #673ab7;border-color: #673ab7;">Calificar</button>-->
                <input type="button" class="fadeIn fourth" value="Siguiente" onclick="confirmarDatos()">
              </div>
            </div>
            </form>
          <?php //}?>
          
          <div class="col col-lg-2">

          </div>
        </div>
      </div>
    </body>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    <!-- footer-->
    <?php echo view('templates/footer')?>
    <!-- footer -->
    <script>
    function confirmarDatos(){
        var opt1 = $('input:radio[name=optradio1]:checked').val();
        var opt2 = $('input:radio[name=optradio2]:checked').val();
        var opt3 = $('input:radio[name=optradio3]:checked').val();
        var opt4 = $('input:radio[name=optradio4]:checked').val();
        
        if(opt1 == undefined || opt2 == undefined || opt3 == undefined || opt4 == undefined){
            // alert('favor de llenar los campos');
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Rellene los campos',
            });
        }else{
            $("#form-calificar").submit();
        }
    }
    </script>
    </html>