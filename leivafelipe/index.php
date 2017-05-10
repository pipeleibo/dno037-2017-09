<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">Titanic</h2>
<p class="lead">Un listado de los pasajeros.</p>
</div>

function setup() {
  canvas = createCanvas(windowWidth, windowHeight * 0.8);
  canvas.parent('top');
  canvas.position(0, 0);
  canvas.style('z-index', '-1');
  noLoop();
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight * 0.8);
}

function draw() {
  var palabra = "supercalifragilisticoespialidoso";
  var contador = 0;
  fill(255);
  background(237,34,93);
  textSize(50);
  for (var x = 0; x < palabra.length; x++) {
    contador++;
  }
  textAlign(CENTER);
  text(contador, width / 2, height / 2);
}


<?php include('footer.php');?>
