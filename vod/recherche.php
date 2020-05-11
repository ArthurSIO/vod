<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>VOD-Recherche de films </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/style.css" />
    </head>
    <body>

		
		<?php
		$lines = file("data/vod.csv");	
		$resultat = false ;		
		foreach($lines as $n => $line){
		$unfilm = explode(":", $line);		
		if (strtoupper($unfilm[0]) == strtoupper($_GET["nom"])) {
			$resultat = true ;
			echo "<center><p id='texte'>Voici le film que vous avez demandé :</p></center>";
			echo "
			<table>
			<tr id='tetetab'><td>Film</td><td>Année</td><td>Producteur</td></tr>
			<tr><td>$unfilm[0]</td><td>$unfilm[1]</td><td>$unfilm[2]</td></tr>
			</table>
			" ;
			break;
			}
		}		
		if ($resultat == false){
			echo "<center><p id='texte'>Désolé, nous n'avons pas trouvé votre film.</p></center>" ;
			}
		?>
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
