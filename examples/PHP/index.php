<?php 

	include('lang/config_lang.php');

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/flottant.css">
		<title>Test</title>
	</head>
	<body>
		<center>
			<img src="../img/php.PNG" style="margin-bottom: -100px;">
			<div class="container">
				<a href="https://github.com/Sanix-Darker">
					<img src="https://avatars1.githubusercontent.com/u/22576758?s=400&v=4" style="border-radius: 100%;width:100px;"><br>
					Sanix Darker Github
				</a>

				<div id="menu">
					<ul>
						<li><?=MENU_PREMIER?></li>

						<li><?=MENU_DEUXIEME?> </li>

						<li><?=MENU_TROISIEME?> </li>
					</ul>
					<select onchange="document.location='?lang='+this.value" style="padding: 6px;">
						<option selected="" disabled="">Choose language</option>
						<option value="fr" <?=(ifIsCurrentlangOrNot('fr'))? 'selected': ''?>><?=SELECT_LANGUE_FR?></option>
						<option value="en" <?=ifIsCurrentlangOrNot('en')? 'selected': ''?>><?=SELECT_LANGUE_EN?></option>
						<option value="sp" <?=ifIsCurrentlangOrNot('sp')? 'selected': ''?>><?=SELECT_LANGUE_SP?></option>
					</select>
				</div>
				<h2><?=LIBELLE_PAGE?></h2>
			</div>
		</center>
	</body>
</html>

