<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (isset($_POST['form'])) {
		echo "- <a href='etat_civil.php?nom=".$_POST['nom']."&prenom=".$_POST['prenom']."'>Votre etat civil</a> :";
		echo "- <a href='adresse.php?code_postal=".$_POST['code_postal']."&adresse=".$_POST['adresse']."&ville=".$_POST['ville']."'>Votre adresse</a> :";
	}
?>
</body>
</html>