<?php session_start(); 
$_SESSION['Auth'] = array(
				'email'=>'contact@baloran.fr',
				'password'=>'test'
			);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?= THEME_CSS; ?>styles.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?= THEME_JS; ?>slides.min.jquery.js"></script>
	<script type="text/javascript" src="<?= THEME_JS; ?>main.js"></script>
	<title></title>
</head>
<body >
<span id="erreur"></span>
<span id="valid"></span>
<div id="main">
<div id="header">
	<img src="<?= THEME_IMG; ?>home.png" alt="HOME" class="home_l">
	<form action="#" id="connectlogin" method="POST">
			<input type="text" name="login" placeholder="PSEUDO" id="email">
		<input type="password" name="password" placeholder="MOT DE PASSE" id="password"><br>
		<input type="submit" value="se connecter" class="submit">
	</form>
	<div id="info">

	</div>
</div>