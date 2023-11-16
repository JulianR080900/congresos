<!-- <style>
  #footer {
    color: #fff;
    padding: 20px;
    text-align: left;
    position: fixed;
    bottom: 0;
    width: 100%;
  }

  #footer-container {
    display: flex;
    align-items: center;
  }

  #cube-container {
    perspective: 400px;
    perspective-origin: 50% 50%;
    width: 150px; 
    height: 150px; 
    position: relative;
    margin-left: 20px; 
    margin-bottom: 20px;
  }

  #cube {
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
  }

  .face {
    position: absolute;
    width: 150px; 
    height: 150px; 
    border: 1px solid #fff;
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center;
    background-color: #000;
  }

  .face1 { transform: rotateY(0deg) translateZ(75px);}
  .face2 { transform: rotateY(90deg) translateZ(75px); }
  .face3 { transform: rotateY(180deg) translateZ(75px); }
  .face4 { transform: rotateY(-90deg) translateZ(75px); }
</style>

<div id="footer">
  <div id="footer-container">
    <div id="cube-container">
      <div id="cube">
        <div class="face face1" style="background-image: url('<?= base_url('public/img/cubo/1.jpg') ?>');"></div>
        <div class="face face2" style="background-image: url('<?= base_url('public/img/cubo/2.jpg') ?>');"></div>
        <div class="face face3" style="background-image: url('<?= base_url('public/img/cubo/3.jpg') ?>');"></div>
        <div class="face face4" style="background-image: url('<?= base_url('public/img/cubo/4.jpg') ?>');"></div>
      </div>
    </div>
  </div>
</div>

<script>
  var cube = document.getElementById('cube');
  var rotation = 0;

  function rotateCube() {
    rotation += 0.5; // Ajusta la velocidad de rotación según sea necesario
    cube.style.transform = 'rotateY(' + rotation + 'deg)';
  }

  setInterval(rotateCube, 10);
</script>
 -->