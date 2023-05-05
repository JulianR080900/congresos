<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Podium de ganadores - <?= $red . ' ' . $anio ?></title>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>
  <!--<link rel="stylesheet" href="<?php echo base_url();?>/public/css/font_awesome/all.min.css"></link>-->
  <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,700");
    body {
      font-size: 16px;
      /*background: #fafafa;*/
      font-family: "Roboto";
      background-image:url("<?php echo base_url()."/public/backgrounds/".$red.".png"?>");
      padding: 20px;
    }
    
    .number-holder {
      transition: all 500ms ease-in-out;
    }
    
    .scoreboard {
      border-radius: 5px;
      display: flex;
      max-width: 1170px;
      margin: 0 auto;
      padding: 3rem 50px;
      flex-direction: column;
      background: #fff;
    }
    .scoreboard__item {
      display: flex;
      padding: 1rem 0;
      width: 100%;
      margin-top: 2rem;
      flex-wrap: wrap;
      opacity: 0;
      top: 20px;
      transition: 500ms ease-in-out;
    }
    .scoreboard__item.is-visible {
      opacity: 1;
      top: 0;
      transition: 500ms ease-in-out;
    }
    .scoreboard__title {
      width: 300px;
      font-weight: 600;
    }
    .scoreboard__title small {
      color: #333;
    }
    small{
        position: absolute
    }
    .scoreboard__status {
      font-weight: 300;
    }
    .scoreboard__numbers {
      font-weight: 600;
      text-align: right;
      align-self: flex-end;
      margin-left: 20px;
      flex: 1;
    }
    .scoreboard__bar {
      width: 100%;
      margin-top: 1rem;
      background: #ececec;
      height: 10px;
      position: relative;
      border-radius: 5px;
      transition: all 500ms ease-in-out;
      display: flex;
      flex-basis: 100%;
    }
    .scoreboard__bar:before {
      content: "";
      width: 100%;
      flex-basis: 100%;
      clear: both;
      display: block;
    }
    .scoreboard__bar-bar {
      position: absolute;
      height: 10px;
      left: 0;
      top: 0;
      width: 0;
      border-radius: 5px;
      background: linear-gradient(to right, #F0CF65 0%, #ebc137 100%);
      transition: all 250ms ease-in-out;
    }
    
    .scoreboard__podiums {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      margin: 20px auto 100px auto;
      min-height: 350px;
    }
    .scoreboard__podiums .scoreboard__podium {
      margin: 0 20px;
      display: flex;
      flex-direction: column;
      align-self: flex-end;
      flex-wrap: wrap;
      flex: 1;
      opacity: 0;
      top: -10px;
    }
    .scoreboard__podiums .scoreboard__podium.is-visible {
      top: 0;
      opacity: 1;
      transition: all 500ms ease-in-out;
      /**/
      position: relative; 
      width: 400px;
    }
    .scoreboard__podiums .scoreboard__podium-rank {
      font-size: 4rem;
      font-weight: 700;
      position: absolute;
      left: 50%;
      transform: translate(-50%, -50%);
      bottom: 0px;
    }
    .scoreboard__podiums .scoreboard__podium-base {
      height: 0;
      background: #ececec;
      color: #fff;
      min-width: 150px;
      border-radius: 5px;
      transition: all 1000ms ease-in-out;
      opacity: 0;
      position: relative;
    }
    .scoreboard__podiums .scoreboard__podium-base.is-expanding {
      opacity: 1;
    }
    .scoreboard__podiums .scoreboard__podium-base--first {
      /*background: linear-gradient(to bottom, #BD4F6C 0%, #9e3b55 100%);*/
          background: linear-gradient(to right, rgba(241,231,103,1) 0%, rgba(254,182,69,1) 100%);
    }
    .scoreboard__podiums .scoreboard__podium-base--second {
      /*background-color: #F0CF65;*/
      /*background: linear-gradient(to bottom, #F0CF65 0%, #ebc137 100%);*/
      background: linear-gradient(to right, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 50%, rgba(209,209,209,1) 72%, rgba(226,226,226,1) 97%, rgba(254,254,254,1) 100%);
    }
    .scoreboard__podiums .scoreboard__podium-base--third {
      /*background-color: #5E9EAD;*/
      /*background: linear-gradient(to bottom, #5E9EAD 0%, #49828f 100%);*/
            background: linear-gradient(to right, rgba(252,205,186,1) 0%, rgba(252,131,79,1) 32%, rgba(250,75,0,1) 99%, rgba(181,74,108,1) 100%);
    }
    .scoreboard__podiums .scoreboard__podium-number {
      text-align: center;
      font-size: 1.5rem;
      margin-top: 10px;
    }
    .scoreboard__podiums .scoreboard__podium-number small {
      display: block;
      font-size: 60%;
      color: #333;
      line-height: 1.5;
      text-transform: uppercase;
    }
    
    .credits {
      font-size: 14px;
      text-align: center;
      margin: 20px 0;
    }
    
    #scoreboard__items {
      position: relative;
      margin: 0;
      padding: 0;
      list-style-type: decimal;
    }
    
    .oneup-audio {
      display: none;
    }
    
    .style-switch {
      position: absolute;
      top: 0;
      left: 0;
      background: #000;
      color: #fff;
      padding: 5px 10px;
      border: none;
      font-size: 15px;
    }
    
    body.dark-mode {
      background: #111;
      color: #fff;
    }
    body.dark-mode .scoreboard {
      background: #111;
      color: #fff;
    }
    body.dark-mode .scoreboard small {
      color: #eee !important;
    }
    body.dark-mode .scoreboard__bar {
      background: #333;
    }
    
    .bump {
      -webkit-animation: bump 500ms ease-in-out;
              animation: bump 500ms ease-in-out;
    }
    
    @-webkit-keyframes bump {
      50% {
        transform: scale(1.1);
      }
      60% {
        transform: scale(1);
      }
    }
    
    @keyframes bump {
      50% {
        transform: scale(1.1);
      }
      60% {
        transform: scale(1);
      }
    }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="scoreboard">
    <h1 class='text-center'>Podium del Congreso <?= $red . ' ' . $anio ?></h1>
    <hr>
  <div class="scoreboard__podiums" style="margin-bottom: 200px;">
      
      <div class="row">
            <div class="scoreboard__podium js-podium col-md-4" data-height="200px">
                <div class="scoreboard__podium-base scoreboard__podium-base--second">
                    <div class="scoreboard__podium-rank">2</div>
                </div>
                <div class="scoreboard__podium-number">
                    <!--<small><span class="js-podium-data"></span></small>-->
                    <small id="2do_lugar"></small>
                </div>
            </div>
        
            <!--Primer Lugar-->
            <div class="scoreboard__podium js-podium col-md-4" data-height="250px">
                <div class="scoreboard__podium-base scoreboard__podium-base--first">
                    <div class="scoreboard__podium-rank">1</div>
                </div>
                <div class="scoreboard__podium-number">
                    <!--<small><span class="js-podium-data"></span></small>-->
                    <small id="1er_lugar"></small>
                </div>
            </div>
        
        
            <div class="scoreboard__podium js-podium col-md-4" data-height="150px">
                <div class="scoreboard__podium-base scoreboard__podium-base--third">
                    <div class="scoreboard__podium-rank">3</div>
                </div>
                <div class="scoreboard__podium-number">
                    <!--<small><span class="js-podium-data"></span></small>-->
                    <small id="3er_lugar"></small>
                </div>
            </div>
      </div>

    
</div>

  
  
  
  
  <!--Lista de las ponencias restantes-->
  <ol class="scoreboard__items" id="scoreboard__items" start="4">
  <!--<li class="scoreboard__item" data-count="0">-->
  <!--  <div class="scoreboard__title">Helena Cosmetics</div>-->
  <!--  <div class="scoreboard__status">-->
  <!--    <div class="js-oneup">epost@epost.com</div>-->
  <!--  </div>-->
  <!--    <div class="scoreboard__numbers">-->
  <!--     <span class="js-number"></span>-->
  <!--  </div>-->
  <!--    <div class="scoreboard__bar js-bar">-->
  <!--<div class="scoreboard__bar-bar"></div>-->
  <!--</div>-->
  <!--</li>-->
  <!--<li class="scoreboard__item" data-count="0">-->
  <!--  <div class="scoreboard__title">Wenghuset</div>-->
  <!--   <div class="scoreboard__status">-->
  <!--    epost@epost.com-->
  <!--  </div>-->
  <!--    <div class="scoreboard__numbers">-->
  <!--    <span class="js-number"></span>-->
  <!--  </div>-->
  <!--  <div class="scoreboard__bar js-bar">-->
  <!--<div class="scoreboard__bar-bar"></div>-->
  <!--</div>-->
  <!--</li>-->
  <!--<li class="scoreboard__item" data-count="0">    -->
  <!--  <div class="scoreboard__title">Cable Com</div>-->
  <!--   <div class="scoreboard__status">-->
  <!--    epost@epost.com-->
  <!--  </div>-->
  <!--    <div class="scoreboard__numbers">-->
  <!--     <span class="js-number"></span>-->
  <!--  </div>-->
  <!--  <div class="scoreboard__bar js-bar">-->
  <!--<div class="scoreboard__bar-bar"></div>-->
  <!--</div>-->
  <!--</li>  -->
  <!--<li class="scoreboard__item">-->
  <!--  <div class="scoreboard__title">Allegro</div>-->
  <!--   <div class="scoreboard__status">-->
  <!--    epost@epost.com-->
  <!--  </div>-->
  <!--    <div class="scoreboard__numbers">-->
  <!--     <span class="js-number">0</span>-->
  <!--  </div>-->
  <!--   <div class="scoreboard__bar js-bar">-->
  <!--<div class="scoreboard__bar-bar"></div>-->
  <!--</div>-->
  <!--</li>-->
  </ol>
  
  <table class="table" style="">
  <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Ponencia</th>
      <th scope="col">Nombre de ponencia</th>
      <th scope="col">Promedio de posicion</th>
      <th scope="col">Comentarios</th>
      <th scope="col">Ver publicaci®Æn</th>
    </tr>
  </thead>
  <tbody id="listado" style="padding-top:50px">
    <!--<tr>-->
    <!--  <th scope="row">1</th>-->
    <!--  <td>Mark</td>-->
    <!--  <td>Otto</td>-->
    <!--  <td>@mdo</td>-->
    <!--</tr>-->
    <!--<tr>-->
  </tbody>
</table>
</div>

<!--<audio src="http://themushroomkingdom.net/sounds/wav/smb/smb_1-up.wav" class="js-oneup-audio oneup-audio">test</audio>-->

<!--<button class="js-style-switch style-switch">Dark/Light mode</button>-->

<!-- partial -->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>-->
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/tinysort/2.3.6/tinysort.min.js'></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--<script  src="./script.js"></script>-->
<script>
    var sum = 1000; // rank 1.
    var time = 250;
    
    $(document).ready(function() {
      
    $('body').addClass('light-mode');
      
    $('.js-style-switch').on('click', function(e) {
      e.preventDefault();
      $('body').toggleClass('dark-mode');
    });
      
    $('.js-podium').each(function(){
      var t = $(this);
      setTimeout( function(){ 
      t.addClass('is-visible');
      var h = t.data('height');
    //   console.log(h);
      t.find('.scoreboard__podium-base').css('height', h).addClass('is-expanding');
        }, time);
      time += 250;
    });
      
      
    }); 

</script>

<script>

// setTimeout(getListado,2000)
$(document).ready(function() {
    getListado();
});
setInterval(verificarActualizacion,3000);

    var base_url = "<?php echo base_url()?>";
    var red = "<?php echo $red ?>";
    var anio = "<?php echo $anio ?>";
    var fecha = "";

    function getListado(){
        $.ajax({
            url: base_url +"/MainController/actualizar_lista_ponencias",
            type: "POST",
            data:{
                "red": red,
                "anio": anio
            }, 
            success: function(resp){
                var resultado = JSON.parse(resp);
                console.log(resultado);
                // const r = resultado["calificaciones"]
                // console.log(resultado["calificaciones"]);
                
                var tabla = document.getElementById('listado');
                tabla.innerHTML = resultado["lista"];
                
                if(resultado[0]['promedio'] != undefined){
                    var lugar1 = document.getElementById('1er_lugar');
                    lugar1.innerHTML = resultado[0]["nombre_ponencia"] + '<br><b>En relaci√≥n a: '+resultado[0]["promedio"]+'</b>';
                }
                if(resultado[1] != undefined){
                    var lugar2 = document.getElementById('2do_lugar');
                    lugar2.innerHTML = resultado[1]["nombre_ponencia"] + '<br><b>En relaci√≥n a: '+resultado[1]["promedio"]+'</b>';
                }
                
                if(resultado[2] != undefined){
                    var lugar3 = document.getElementById('3er_lugar');
                    lugar3.innerHTML = resultado[2]["nombre_ponencia"] + '<br><b>En relaci√≥n a: '+resultado[2]["promedio"]+'</b>';
                }
                
            },
                statusCode: {
                    400: function(xhr){
                }
            }
        })
    }
    
    function verificarActualizacion(){
           $.ajax({
            url: base_url +"/MainController/actualizacion_ponencias",
            type: "POST",
            data:{
                "fecha" :fecha,
                "red": red,
                "anio": anio
            }, 
            success: function(resp){
                var resp = JSON.parse(resp);
                
                if(resp["resultado"] == "actualizarFecha"){
                    
                    fecha = resp["ultima_fecha"];
                    
                }else if(resp["resultado"] == "actualizacion"){
                    fecha = resp["ultima_fecha"];
                    getListado();
                }
                
                console.log(resp);

            },
                statusCode: {
                    400: function(xhr){
                }
            }
        })
    }


</script>

</body>
</html>
