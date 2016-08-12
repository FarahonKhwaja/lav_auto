<?php
//PDOOOO
$dsn = 'mysql:dbname=lav_auto;host=127.0.0.1';
$user = 'root';
$password = '';
try {
	$db = new PDO($dsn, $user, $password);
	/* requete affichage 'Khwaja'
	$sql = "SELECT * FROM utilisateur WHERE ID = '1'";
	$res = $db->query($sql);
	$data = $res->fetch();
	echo $data[1];
	*/
}
catch(PDOException $e)
{
	echo "connexion échouée : ". $e->getMessage();
}
?>