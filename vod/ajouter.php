<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>VOD-Ajouter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/style.css" />
    </head>
    <body>
    <?php 
    $resultat = implode(":",$_GET);

	$file = fopen("data/vod.csv", "a+");
	fwrite($file,$resultat);
	fclose($file);
	?>
	
	<div id="titre">
		<p>Votre film à bien été ajouté !</p>
	</div>
	
	<table>
		<tr><td>Film</td><td>Année</td><td>Producteur</td></tr>
	<?php
		echo "<tr><td>$_GET[nom]</td><td>$_GET[annee]</td><td>$_GET[prod]</td></tr>";
	?>
	</table>  
	<br />
		<br />
		<center><div>
		<a href="vod.html">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
				Menu Principale
		</a>
	</div></center>
</body>
