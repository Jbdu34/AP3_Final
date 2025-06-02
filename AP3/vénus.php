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
				<img src="img_planet/Venus.png" alt="Info Planète" />
			</div>
			<div class="details-box">
				<h1>Vénus</h1>
				<div id="btn">
					<ion-icon id="btn-icon" name="chevron-down"></ion-icon>
				</div>
			</div>
			<div id="details">
				Vénus est la deuxième planète du système solaire, située entre Mercure et la Terre.
				Elle est souvent appelée la "jumelle de la Terre" en raison de sa taille et de sa masse similaires, mais elle diffère considérablement dans son atmosphère et sa surface.
                Vénus a une atmosphère dense principalement composée de dioxyde de carbone, avec des nuages d'acide sulfurique.
				Cette atmosphère crée un effet de serre intense, faisant de Vénus la planète la plus chaude du système solaire, malgré sa position légèrement plus éloignée du Soleil que la Terre.
				Les températures de surface vénusienne sont assez extrêmes, dépassant 450 degrés Celsius.
                La surface de Vénus est caractérisée par des plaines volcaniques, des hautes montagnes et d'immenses bassins.
				En raison de son atmosphère dense, il est difficile d'observer la surface de Vénus directement depuis l'espace à l'aide de télescopes optiques.
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

