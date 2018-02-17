<!DOCTYPE html>
<html>
<head>
<title>connection</title>
<meta http-equiv="Content-Type" content="text/html;
charset=iso-8859-1" />
</head>
<body>
<?php
try{
	$bdd = new PDO("mysql:host=localhost;dbname=school", "root", "sceptre");


}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

         $prenom = "";
		 $nom = "";
		 $ville="";
		 $adress ="";
		 $code="";
		 function securisation($donnees){
		 $donnees=trim($donnees);
		 $donnees=stripcslashes($donnees);
		 $donnees=strip_tags($donnees);
		 return $donnees;
		 }
		 $prenom=securisation($_POST['prenom']);
		 $nom=securisation($_POST['nom']);
		 $ville=securisation($_POST['ville']);
		 $adress=securisation($_POST['adresse']);
		 $code=securisation($_POST['code']);


	     $prenom = $_POST['prenom'];
		 $nom = $_POST['nom'];
		 $ville = $_POST['ville'];
		 $adress = $_POST['adresse'];
		 $code = $_POST['code'];
			$sql = "INSERT INTO personne(PRENOM,NOM,VILLE,ADRESSE,CODE)VALUES('$prenom','$nom','$ville','$adress','$code')" ;
			$bdd->exec($sql);
			//mysql_query ($sql) or die (mysql_error());





		 try{
                include('affiche.php');
		 }
		 catch(Exception $e)
         {
         die('Erreur : '.$e->getMessage());
         }
		?>

</body>
</html>