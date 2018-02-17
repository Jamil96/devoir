<?php require('connection.php'); ?>
	<?php $selection=$bdd->query("SELECT * FROM personne") ?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>affiche la liste des personnes</title>
</head>
<body>
		<h1 style="text-align:center;"></h1>
		<h1>Les personnes dans notre base de donnees</h1>
		<table class="tab" >
				<tr>
					<th>IDENTIFIANT</th>
					<th>PRENOM</th>
					<th>NOM</th>
					<th>VILLE</th>
					<th>ADRESSE</th>					
					<th>CODE</th>
				</tr>
			<?php
			 while ( $resultat=$selection->fetch()){ ?>
				<tr>
					<td><span><?php echo $resultat['ID'] ; ?></span></td>
					<td><?php echo $resultat['PRENOM'] ; ?></td>
					<td><?php echo $resultat['NOM'] ; ?></td>
					<td><?php echo $resultat['VILLE'] ; ?></td>
					<td><?php echo $resultat['ADRESSE'] ; ?></td>
					<td><?php echo $resultat['CODE'] ; ?></td>

				</tr>
			<?php } ?>
			</table>
			
		

</body>
</html>