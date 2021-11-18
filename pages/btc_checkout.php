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
		<meta charset="utf-8">
		<title>Sienna - Checkout</title>
		<link rel="stylesheet" href="../style/style.css">
		<link rel="icon" type="image/png" href="../img/logo.ico"/>
		<link rel = "schema.DC" href = "http://purl.org/DC/elements/1.0/">
		<meta name = "DC.Title" content = "Sienna">
		<meta name = "DC.Creator" content = "Hadrien PARIS">
		<meta name = "DC.Type" content = "blog">
		<meta name = "DC.Date" content = "2021">
		<meta name = "DC.Format" content = "text/html">
		<meta name = "DC.Language" content = "en">
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
		$display->renderSiennaNavFromPages();
		$display->renderSiennaCheckoutPage();
		$display->renderSiennaFooterFromPages();
		?>
	</body>
</html>
