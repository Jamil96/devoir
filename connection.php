<?php
$bd_server="localhost";
$bd_login="root";
$bd_passwd="sceptre";
$bd_name="school";
//creation d'un objet de connection a la base de donnees
//$con=new PDO('mysql:host='.$server.';dbname=client;charset=utf-8',$login,$passwd);
$bdd = new PDO('mysql:host=localhost;dbname=school', 'root', 'sceptre');
?>