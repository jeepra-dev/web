<!DOCTYPE html>
<html>
<head>
	<title>Page HTML</title>
</head>
<body>
	<h1>Resulat des tests</h1>
	<?php
		if (isset($_POST('form'))) {
			echo "Le chifrre ".$_POST['ch1']." est compris entre ".$_POST['ch2']." et ".$_POST['ch3']." ?";

			if ($_POST['ch1'] > $_POST['ch2'] && $_POST['ch1'] < $_POST['ch2']) {
				echo "Oui, Le chifrre ".$_POST['ch1']." est compris entre ".$_POST['ch2']." et ".$_POST['ch3']." ?";
			} else {
				echo "Non, Le chifrre ".$_POST['ch1']." n'est pas compris entre ".$_POST['ch2']." et ".$_POST['ch3']." ?";
			}
		}
	?>
	<form action="check.php" method="post">
		<p>
			Le chifrre <input type="number" name="ch1"> est compris entre 
			<input type="number" name="ch2"> et <input type="number" name="ch3">
		</p>
		<div>
			<input type="button" value="Envoyer" name="form">
			<input type="button" value="Reinitialisé">
		</label>
	</form>		
</body>
</html>