<?php include('header.php');?>
<?php $aqui = "En este lugar corresponde algo con PHP"?>

<?php
$out = fopen('php://output', 'w');
fputcsv($out, array('this','is some', 'csv "stuff", you know.'));
fclose($out);
?>


<div class="inner cover">
<h2 class="cover-heading">Más sobre el tema</h2>
<p class="lead"><?php echo $aqui;?></p>
</div>
<?php include('footer.php');?>
