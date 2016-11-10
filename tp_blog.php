<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>

<body>
<?php include ("tp_cible.php") ?>
<form action="#" method="POST">
<div>
<h1><center>Blog</center></h1>
<p>
	<label for="pseudo"><center>Pseudo : </label><input type="text" name="pseudo" /></center>
	<br/>
	<br/>
	<label for="titre"><center>Titre : </label><input type="text" name="titre" /></center>
	<br/>
	<br/>
	<label for="message"><center>Message : </label><input type="textarea" size="50" style="height:100px;" name="message" /></center>
	<br/>
	<br/>
	<center><input type="submit" value="Poster" /></center>
</p>
</div>
</form>
</body>
</html>