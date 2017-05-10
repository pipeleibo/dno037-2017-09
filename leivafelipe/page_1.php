<?php include('header.php');?>

<?php
$data = array_map('str_getcsv', file('http://datos.gob.cl/dataset/a9cb337e-ccf0-441c-9d04-c8189912ffbe/resource/9131d514-43ce-4d89-8746-c1ea2db60bab/download/urgenciasene2017.csv'));
array_walk($data, function(&$a) use ($data) {$a = array_combine($data[0], $a);});
array_shift($data);
?>


<?php $aqui = "En este lugar corresponde algo con p5.js"?>
<div class="inner cover">
<h2 class="cover-heading">Más sobre el tema</h2>
<p class="lead"><?php echo $aqui;?></p>
</div>
<?php include('footer.php');?>
