<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	if (isset($_GET['nom']) && isset($_GET['prenom'])) {
		echo 'Votre nom :'.$_GET['nom'];
		echo 'Votre prenom :'.$_GET['prenom'];
	}
?>
</body>
</html>