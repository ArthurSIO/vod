<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>VOD-Consulter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/style.css" />
    </head>
    
    
	<body>
	<table>
		<tr id="tetetab"><td>Film</td><td>Année</td><td>Producteur</td></tr>
	<?php
	$lines = file("data/vod.csv");
	foreach($lines as $n => $line){
		$elements = explode(":",$line);
		echo "<tr><td>$elements[0]</td><td>$elements[1]</td><td>$elements[2]</td></tr>";
	}
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
