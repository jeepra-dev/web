<!DOCTYPE html>
<html>
<head>
	<title>Page HTML</title>
</head>
<body>
	<?php if (isset($_POST['form'])): 
		echo "Bienvenue ".$_POST['prenom']." ".$_POST['nom'].". Nous avons bien noté que vous habitez ".$_POST['adresse']." à ".$_POST['ville']."(".$_POST['code_postal'].").";
	 else:?>
		<form action="fichier_liens.php" method="post">
			<label for="prenom">
				<span>Prenom :</span>
				<input type="text" name="prenom">
			</label>
			<label for="nom">
				<span>Nom :</span>
				<input type="text" name="nom">
			</label>
			<label for="adresse">
				<span>Adresse :</span>
				<input type="text" name="adresse">
			</label>
			<label for="ville">
				<span>Ville :</span>
				<input type="text" name="ville">
			</label>
			<label for="code_postal">
				<span>Code postale :</span>
				<input type="text" name="code_postal">
			</label>
			<div>
				<input type="button" value="Envoyer" name="form">
				<input type="button" value="Reinitialisé">
			</label>
		</form>		
	<?php endif;?>
</body>
</html>