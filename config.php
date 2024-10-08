<!DOCTYPE html>
<html lang="en">
<head>
<title>modo Condig - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="modo Condig - PMC Tactical">
<META name="keywords" content="modo Condig, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1><b>PMC Tactical modo Condig</b></h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<h2>modo Condig</h2>
<p>
Do not use your old config with new modo install, let it create a new config.
</p>

<p>
If you think your modo config has been corrupted, exit modo and delete the &lt;modo-version&gt;.cfg from:
</p>
<pre>
C:\Users\&lt;USERNAME&gt;\AppData\Roaming\Luxology\
</pre>

<p>
modo v13.0v1 at least in first initial start of a new modo version, CFG file is saved when you exit, not before.
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
