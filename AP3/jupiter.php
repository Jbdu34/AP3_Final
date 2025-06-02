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
				<img src="img_planet/Jupiter.png" alt="Info Planète" />
			</div>
			<div class="details-box">
				<h1>Jupiter</h1>
				<div id="btn">
					<ion-icon id="btn-icon" name="chevron-down"></ion-icon>
				</div>
			</div>
			<div id="details">
				Jupiter est la cinquième planète du système solaire, une géante gazeuse aux dimensions massives.
				Elle est principalement composée d'hydrogène et d'hélium, et sa masse est environ deux fois et demie celle de toutes les autres planètes du système solaire réunies.
				Jupiter est connue pour sa grande tache rouge, une gigantesque tempête anticyclonique qui fait partie de son atmosphère turbulente.
				La plus grande lune de Jupiter, Ganymède, est également la plus grande lune du système solaire. Jupiter a un total d'au moins 79 lunes confirmées à ce jour.
				En raison de sa taille et de sa masse, Jupiter joue un rôle crucial dans la dynamique du système solaire, influençant les orbites des autres planètes grâce à sa force gravitationnelle.
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