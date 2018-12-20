
load 'lang/config_lang.rb' 

@result_page = '
	<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="css/flottant.css">
			<title>Test</title>
		</head>
		<body>
			<center>
				<img src="../img/js.PNG" style="margin-bottom: -100px;">
				<div class="container">
					<a href="https://github.com/Sanix-Darker">
						<img src="https://avatars1.githubusercontent.com/u/22576758?s=400&v=4" style="border-radius: 100%;width:100px;"><br>
						Sanix Darker Github
					</a>
					<div id="menu">

						<ul>
							<li > '+MENU_PREMIER+'</li>
							<li > '+MENU_DEUXIEME+' </li>
							<li > '+MENU_TROISIEME+' </li>
						</ul>
						<select style="padding: 6px;" id="valueOflang">
							<option selected="" disabled="">Choose language</option>
							<option value="fr" >'+SELECT_LANGUE_FR+'</option>
							<option value="en" >'+SELECT_LANGUE_EN+'</option>
							<option value="sp" >'+SELECT_LANGUE_SP+'</option>
						</select>
					</div>
					<h2 > '+LIBELLE_PAGE+'</h2>
				</div>
			</center>

			<script type="text/javascript" src="js/config_lang.js"></script>
			<script type="text/javascript" src="js/sanix_lang_app.js"></script>
		</body>
	</html>'

