<?php
session_set_cookie_params( ["samesite" =>"Strict"]);
session_name("sienna"); // changement du nom de cookie de session
session_start();
require_once("displayer.php"); // include of view related php functions
$display = new Displayer();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sienna</title>
		<link rel="stylesheet" type="text/css" href="../style/stylesheetlogin.css"/>
		<link rel="icon" type="image/ico" href="../img/logo.ico"/>
		<style>
			@font-face
			{
				font-family: 'Quicksand';
				src: url('../fonts/Quicksand_Light.otf');
			}
		</style>
	</head>
	<body>
		<?php
		$display->renderAuthenticationForm();
		?>
	</body>
</html>
