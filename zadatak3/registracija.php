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
		<h1>Registracija</h1>
		<form action="regi.php" method="post">
			<div class="form-group row">
				<label for="firstName" class="col-sm-2 col-form-label">First Name</label>
				<div class="col-sm-10">
					<input type="firstName" class="form-control" id="firstName" name="firstName">
				</div>
			</div>
			<div class="form-group row">
				<label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
				<div class="col-sm-10">
					<input type="lastName" class="form-control" id="lastName" name="lastName">
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-2 col-form-label">Main Game</label>
				<div class="col-sm-10">
					<?php
					include "konekcija.php";

					$upit = "SELECT * FROM igrice";

					$rezultat = $mysqli->query($upit);
					?>
					
						<select name="igrica" id="odabrana_igrica" class="form-control">
							<?php
							while ($red = $rezultat->fetch_object()) {
								?>
								<option value="<?php echo $red->igrica; ?>"> <?php echo $red->igrica; ?> </option>
								<?php
							}
							?>
						</select>
					<?php
					$mysqli->close();
					?>
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email">
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password">
				</div>
			</div>
			<input type="submit" name="submit">
		</form>
	</div>


</body>
</html>