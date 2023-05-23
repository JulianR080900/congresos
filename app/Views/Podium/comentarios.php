<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <title>Comentarios</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <!--<script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>-->
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

    section {
      padding: 50px;
      max-width: 80%;
      margin: 30px auto;
      background: white;
      background: white;
      backdrop-filter: blur(10px);
      box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
      border-radius: 20px;
      transition: transform 0.2s ease-in-out;
    }

    .profile_pic{
      width: 30px;
      height: 30px;
      border-radius: 100%;
    }

    </style>
</head>
<body>
<!-- partial:index.partial.html -->

<section>
  <div class="row text-center">
    <h1>Comentarios para la ponencia:</h1>
  </div>
  <div class="row text-center">
    <h3><?= $nombre ?></h3>
  </div>
</section>

<section>
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Nombre</th>
        <th>Comentario</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($comentarios as $c){
        ?>
        <tr>
          <td><img src="https://redesla.la/redesla/resources/img/profiles/<?= $c['profile_pic'] ?>" alt="" class="profile_pic"></td>
          <td><?= $c['nombre'] ?></td>
          <td><?= $c['comentario'] ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
  <hr>
  <div class="row">
  <a href="../<?= $red ?>/<?= $anio ?>" class='btn btn-danger btn-block'>Regresar</a>
  </div>
</section>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tinysort/2.3.6/tinysort.min.js'></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>
</html>
