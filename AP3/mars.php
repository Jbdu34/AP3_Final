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
				<img src="img_planet/Mars.png" alt="Info Planète" />
			</div>
			<div class="details-box">
				<h1>Mars</h1>
				<div id="btn">
					<ion-icon id="btn-icon" name="chevron-down"></ion-icon>
				</div>
			</div>
			<div id="details">
				Mars est la quatrième planète du système solaire, souvent appelée la "planète rouge" en raison de la couleur distinctive de sa surface. <br/>C'est une planète rocheuse, avec des caractéristiques géologiques variées.
       			La surface de Mars présente des canyons impressionnants, des volcans massifs, des plaines et des calottes polaires.
	   			Son atmosphère est beaucoup plus mince que celle de la Terre, principalement composée de dioxyde de carbone, avec des traces d'azote et d'argon.
				En raison de cette atmosphère ténue, Mars connaît des variations de température significatives, avec des tempêtes de poussière occasionnelles qui peuvent obscurcir la surface.
       			Mars a suscité un intérêt particulier en raison de la possibilité qu'elle ait pu soutenir la vie par le passé.
       			Mars possède aussi deux satellite de petite taille , qui ont une apparence d'astéroide , ce sont Phobos et Deimos.
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