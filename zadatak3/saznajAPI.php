<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ITEH</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script type="text/javascript" src="saznajAPI.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">GAMEMANIA<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="saznaj.php">Saznaj</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="saznajAPI.php">API</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="registracija.php">Registracija</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="VS.php">VS</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="uredu">
			<div id="sel">
			<select id="select" name="options">
				<option selected disabled hidden>Izaberite igricu</option>
				<option value="league-of-legends">League of Legends</option>
				<option value="limbo">Limbo</option>
				<option value="fifa-18">FIFA</option>
				<option value="dota-2">DOTA 2</option>
			</select>
			</div>
		</div>
		<div class="uredu" id="rad">
			<div><input type="radio" name="podatak" value="opis" checked="checked">Opis<br></div>
			<div><input type="radio" name="podatak" value="slika">Slika<br></div>
		</div>
	</div>
	<div class="container">
		<div id="prikaz">
			<div id="prikaznaslov"></div>
			<div id="prikaztekst"></div>
		</div>
	</div>

</body>
</html>