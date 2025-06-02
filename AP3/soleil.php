<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
		<title>TD1</title>
		<link rel="stylesheet" href="info_planetes.css" />
	</head>
	<body>
		<header>
			<nav>
				<div class="nav__content">
					<div class="logo"><a href="index.php">Système Solaire</a></div>
					<ul>
						<li><a href="equipe.php">Equipe</a></li>
						<li><a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_solaire" class="lien">Wikipédia</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="wrapper">
			<div class="image-box">
				<img src="img_planet/sun.png" alt="Info Planète" />
			</div>
			<div class="details-box">
				<h1>Sun</h1>
				<div id="btn">
					<ion-icon id="btn-icon" name="chevron-down"></ion-icon>
				</div>
			</div>
			<div id="details">
				Le Soleil est une étoile située au centre du système solaire, principale source d'énergie qui permet la vie sur Terre.
				Il est une gigantesque sphère de plasma chaud et lumineux, composé principalement d'hydrogène et d'hélium.
				Sa masse énorme génère une pression et une température suffisamment élevées pour déclencher des réactions nucléaires, produisant ainsi une quantité colossale d'énergie sous forme de lumière et de chaleur.
				La lumière solaire prend environ 8 minutes pour atteindre la Terre, et son énergie influence le climat, la météo et les cycles naturels de notre planète.
				Le Soleil est essentiel à la vie telle que nous la connaissons, et son étude continue de fournir des informations cruciales sur les processus fondamentaux de l'Univers.
			</div>
			<div class="button-container">
				<p><a href="/projets/AP2/index.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Retour</a></p>
			</div>
		</div>
		<script src="affichage.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>