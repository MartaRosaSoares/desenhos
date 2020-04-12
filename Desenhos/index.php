<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<title>Desenhos Animados</title>
	</head>
    <body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Desenhos Animados</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Desenhos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="?page=listar-desenho">Listar Desenhos</a>
						<a class="dropdown-item" href="?page=cad-desenho">Cadastrar Desenhos</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Personagens
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="?page=listar-personagem">Listar Personagens</a>
						<a class="dropdown-item" href="?page=cad-personagem">Cadastrar Personagem</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
					include("config.php");
					switch(@$_REQUEST["page"]){
						case "cad-desenho":
							include("cad-desenho.php");
						break;
						case "listar-desenho":
							include("listar-desenho.php");
						break;
						case "editar-desenho":
							include("editar-desenho.php");
						break;
						case "salvar-desenho":
							include("salvar-desenho.php");
						break;
						case "cad-personagem":
							include("cad-personagem.php");
						break;
						case "listar-personagem":
							include("listar-personagem.php");
						break;
						case "editar-personagem":
							include("editar-personagem.php");
						break;
						case "salvar-personagem":
							include("salvar-personagem.php");
						break;
						default:
							include("main.php");
					}
				?>
			</div>
		</div>
	</div>
    
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>


