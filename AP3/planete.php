<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
	<title>TD1</title>
	<link rel="stylesheet" href="planetes.css" />
</head>

<body>
	<header>
		<nav>
			<div class="nav__content">
				<div class="logo"><a href="index.php">Système Solaire</a></div>
				<ul>
					<li><a href="equipe.php">Equipe</a></li>
					<li><a href="plannig.php">Planning</a></li>
					<li><a href="connexion.php">Connexion</a></li>
					<li><a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_solaire" class="lien">Wikipédia</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<section>
		<h1><i class="fa-sharp"></i> Système Solaire <i class="fa-sharp"></i></h1>
		<div class="content-scroll-horiz">
			<ul>
				<?php
				$planets = array(
					"Soleil" => "sun.png",
					"Mercure" => "mercury.png",
					"Vénus" => "Venus.png",
					"Terre" => "earth.png",
					"Mars" => "Mars.png",
					"Jupiter" => "Jupiter.png",
					"Saturne" => "saturne.png",
					"Uranus" => "uranus.png",
					"Neptune" => "Neptune.png"
				);
	
				foreach ($planets as $planet => $image) {
					?>
					<li>
						<a href="<?php echo strtolower($planet) . '.php'; ?>">
							<div class="foto"><img src="img_planet/<?php echo $image; ?>" alt="" title=""></div>
							<div>
								<h3><span><?php echo $planet; ?></span></h3>
							</div>
						</a>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
	</section>
</body>

</html>