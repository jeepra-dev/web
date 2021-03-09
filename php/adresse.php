<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	if (isset($_GET['code_postal']) && isset($_GET['adresse']) && isset($_GET['ville'])) {
		echo 'Votre adresse :'.$_GET['adresse'];
		echo 'Votre ville :'.$_GET['ville'];
		echo 'Votre code postal :'.$_GET['code_postal'];
	}
?>
</body>
</html>