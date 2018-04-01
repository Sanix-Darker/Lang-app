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
			<div class="container">
				<a href="https://github.com/Sanix-Darker">
					<img src="https://avatars1.githubusercontent.com/u/22576758?s=400&v=4" style="border-radius: 100%;width:100px;"><br>
					Sanix Darker on Github
				</a>

				<div id="menu">
					<ul>
						<li><?=MENU_PREMIER?></li>

						<li><?=MENU_DEUXIEME?> </li>

						<li><?=MENU_TROISIEME?> </li>
					</ul>
					<select onchange="document.location='?lang='+this.value">
						<option selected="" disabled="">Choose language</option>
						<option value="fr"><?=SELECT_LANGUE_FR?></option>
						<option value="en"><?=SELECT_LANGUE_EN?></option>
					</select>
				</div>
				<br><h2><?=LIBELLE_PAGE?></h2>
			</div>
		</center>
	</body>
</html>

