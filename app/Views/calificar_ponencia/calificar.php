<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Calificar ponencias</title>
  <script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>
  <style>
   table, td, th {
    text-align:center;
  }
  
  .padding{
      padding-top: 5px;
  }
  
  /*============== RESPONSIVO ================*/
    @media screen and (max-width: 640PX) {
        /*td{*/
            /*font-size:12px;*/
        /*}*/
        form{
            width:100%;
        }
    }
    
    @media screen and (min-width: 640PX) and (max-width: 1080px){

    }
    
    @media screen and (min-width: 1080px) {

    }
</style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col col-lg-2">

      </div>
        <div class="col-md-auto">
            
          <form action="<?php echo base_url('ordenamiento');?>" id="form-calificar" method="POST">
          <br>
          <br>
          
          
          <div class="d-flex justify-content-center">
            <h6><?php echo "Nombre de la ponencia: ".session('nombre_ponencia') ?></h6>
          </div>
          <br>
          
          <table class="table">

            <tbody>
              <tr>
                <td colspan="3">El objetivo de la investigación está claramente expresado y está enfocado a resolver alguna pregunta de investigación.</td>
              </tr>
              <tr>
                <td>Muy en desacuerdo</td>
                <td>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="1"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="2"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="3"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="4"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="5"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="6"></label>
                  <label class="radio-inline"><input type="radio" name="optradio1" id="optradio1" value="7"></label>
                </td>
                <td>Muy de acuerdo</td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <tbody>
              <tr>
                <td colspan="3">El investigador sustenta su propuesta en un marco de referencia teórico presentando las fronteras de la ciencia.</td>
              </tr>
              <tr>
                <td>Muy en desacuerdo</td>
                <td>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="1"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="2"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="3"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="4"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="5"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="6"></label>
                  <label class="radio-inline"><input type="radio" name="optradio2" id="optradio2" value="7"></label>
                </td>
                <td>Muy de acuerdo</td>
              </tr>
            </table>
            <table class="table">
              <tbody>
                <tr>
                  <td colspan="3">El investigador recogió datos empíricos para probar sus hipótesis o responder sus preguntas de investigación.</td>
                </tr>
                <tr>
                  <td>Muy en desacuerdo</td>
                  <td>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="1"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="2"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="3"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="4"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="5"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="6"></label>
                    <label class="radio-inline"><input type="radio" name="optradio3" id="optradio3" value="7"></label>
                  </td>
                  <td>Muy de acuerdo</td>
                </tr>
              </table>
              <table class="table">
                <tbody>
                  <tr>
                    <td colspan="3">Los análisis se realizaron de acuerdo con la metodología cuantitativa (probando hipótesis), cualitativa (saturando categorías) o con ambas.</td>
                  </tr>
                  <tr>
                    <td>Muy en desacuerdo</td>
                    <td>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="1"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="2"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="3"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="4"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="5"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="6"></label>
                      <label class="radio-inline"><input type="radio" name="optradio4" id="optradio4" value="7"></label>
                    </td>
                    <td>Muy de acuerdo</td>
                  </tr>
                </tbody>
                
              </table>
              <div class="d-flex justify-content-center">
                <!--<button type="submit" class="btn btn-success">Calificar</button>-->
                <button type="button" class="btn btn-success" onClick="confirmarDatos()" style="background-color: #673ab7;border-color: #673ab7;">Calificar</button>
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