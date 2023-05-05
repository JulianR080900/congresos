<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Comentarios</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>
  <!--<link rel="stylesheet" href="<?php echo base_url();?>/public/css/font_awesome/all.min.css"></link>-->
  <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,700");
    body {
      font-size: 16px;
      background-image:url("<?php echo base_url()."/public/backgrounds/".$red.".png"?>");
      font-family: "Roboto";
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



    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="scoreboard">
    
  <table class="table" style="">
  <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Gafete usuario</th>
      <th scope="col">Comentario</th>
    </tr>
  </thead>
  <tbody id="listado">
      <?php
      $i = 1;
      foreach($comentarios as $c){
        echo    '<tr>
                  <th scope="row">'.$i.'</th>
                  <td>'.$c["claveGafete"].'</td>
                  <td>'.$c["comentario"].'</td>
                </tr>';
        
        $i++;
      }
      
      ?>
  </tbody>
</table>
</div>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tinysort/2.3.6/tinysort.min.js'></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>
