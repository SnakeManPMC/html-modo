<!DOCTYPE html>
<html lang="en">
<head>
<title>modo Geometry Mass - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="modo Geometry Mass - PMC Tactical">
<META name="keywords" content="modo, geometry, mass, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Tactical modo Geometry Mass</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<h2>modo Geometry Mass for ArmA 3</h2>
<p>
This is arma3 related geometry mass, I assume normal modo terminology would be "weight map" or something :)
</p>

<p>
HOWTO set geometry mass? You have to be in Vertex Selection for "Set Value" to show the value. Best way to do it is select the polygons and then press ALT-1 into vertex selection. in Modo you're editing the per-vertex weight, not the total weight of all vertices, so you have to look at the selected vertex count in the bottom right of the viewport.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">PMC modo root page</a></p>
<br><br>
<p><i>PMC modo 2019 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
