<!DOCTYPE html>
<html lang="en">
<head>
<title>ArmA 3 modo P3D Plugin - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="ArmA 3 modo P3D Plugin - PMC Tactical">
<META name="keywords" content="arma 3, modo, p3d, plugin, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical ArmA 3 modo P3D Plugin</b></h1>
</header>

<section>
	<h2>ArmA 3 modo P3D Plugin</h2>
<p>
Ian Banks made modo plugin for arma3 p3d model file format: <a href="https://foxhound.international/modo-plugin" target="_blank">foxhound modo-plugin</a>.
</p>

	<h2>Only Edit LXO</h2>
<p>
Most important thing to remember is always edit LXO format models, never edit P3D, the only time you should have P3D open in modo is when you import one. After importing p3d you immediately need to save as LXO. Once you've done editing and want to check the model in arma3 (no there is no need to check it in object builder, when you have modo object builder is obsolete builder), then choose file -> export as, which only <i>exports</i> the model without changing the format whats open in modo.
</p>

	<h2>No NGON's</h2>
<p>
<a href="ngon.php">Ngon's</a> are not accepted in arma3 p3d, you cannot export as model with ngon's in it.
</p>

	<h2>No Textures?</h2>
<p>
When you load P3D which has .PAA textures applied, the model appears without texture in modo. Fix this by going to shader tree (shading tab), open material and click the texture locator(?) to see what the .PAA file name is, rename the .PAA to .TGA, then then use add layer -> image map -> load image and browse to the .TGA texture.
</p>

<p>
Choose the .TGA texture from your actual HDD path not from P:\ as you can symlink different namespaces and then modo loses the texture path.
</p>

<p>
Now textures should appear in your model. Repeat this to all the materials in your model.
</p>

	<h2>Convex</h2>
<p>
modo plugin polygon convex stuff, don't forget to drag the window dialog down from its default position to see these options (click for high res image):<br>
<a href="images/Modo-Plugin-Polygon-Convex-Stuff.png" target="_blank"><img src="images/Modo-Plugin-Polygon-Convex-Stuff.png" alt="modo ArmA 3 Plugin Polygon Convex Hull" style="width:256px;height:256px;"></a>
</p>

	<h2>Rename RV Mesh</h2>
<p>
HOWTO rename mesh item with arma3 modo plugin? (click for high res image):<br>
<a href="images/Modo-Plugin-Rename-RV-Mesh.png" target="_blank"><img src="images/Modo-Plugin-Rename-RV-Mesh.png" alt="modo ArmA 3 Plugin Rename RV Mesh" style="width:256px;height:256px;"></a>
</p>

	<h2>UV Maps?</h2>
<p>
Where are my UV maps? (click for high res image):<br>
<a href="images/Where-Are-My-UV-Maps.png" target="_blank"><img src="images/Where-Are-My-UV-Maps.png" alt="modo Where Are My UV Maps?" style="width:256px;height:256px;"></a>
</p>

<p>
ArmA 3 uses only UV Set 0. When you create brand new geometry / mesh in modo, it places UV's into "Texture" named UV set, you need to move the UVs into UV set 0.
</p>

<p>
Select "Texture" UV set, then in UV editor ALT-SHIFT-A select all, then CTRL-X, then select UV set 0 and I usually click UV editor again and then just CTRL-V paste. Done. Note that if you need to move UVs from one texture to another then its M material etc.
</p>

	<h2>RVMAT Material</h2>
<p>
<b>HOWTO Add RVMAT Material To modo Shader Tree</b>
</p>

<p>
Select the material/texture you want to RVMAT to be added, choose Add Layer -> Group. Then rename the group as your path + RVMAT file name, done.
</p>

<p>
Shader tree, default material. You do not need it for arma3 p3d's, you can delete it. But on the other hand, it doesn't hurt either.
</p>
<!--
	<h2></h2>
<p>
</p>
-->
</section>

<footer>
<p>Back to <a href="index.php">PMC modo root page</a></p>
<br><br>
<p><i>PMC modo 2019 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
