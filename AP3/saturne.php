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
				<img src="img_planet/saturne.png" alt="Info Planète" />
			</div>
			<div class="details-box">
				<h1>Saturne</h1>
				<div id="btn">
					<ion-icon id="btn-icon" name="chevron-down"></ion-icon>
				</div>
			</div>
			<div id="details">
				Saturne est la sixième planète du système solaire, connue pour ses magnifiques anneaux spectaculaires qui la distinguent des autres planètes.
				C'est une géante gazeuse composée principalement d'hydrogène et d'hélium, avec une atmosphère caractérisée par des bandes nuageuses et des tempêtes.
                Les anneaux de Saturne sont constitués de milliards de particules de glace, de roche et de poussière, réparties sur plusieurs dizaines de milliers de kilomètres.
				Ces anneaux sont divisés en plusieurs groupes distincts, chacun étant associé à des caractéristiques particulières.
				Saturne possède également un grand nombre de lunes, dont Titan, la deuxième plus grande lune du système solaire.
            	La planète a une rotation rapide sur son axe, complétant un jour en un peu moins de 11 heures.
				Saturne est également connue pour sa forte inclinaison axiale, ce qui donne lieu à des saisons plus longues et plus marquées que celles de la plupart des autres planètes.
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
