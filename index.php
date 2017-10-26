<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Informática</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#"><i class="fa fa-3x fa-desktop"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php?page=home">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marca</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=cad-marca">Cadastrar</a>
							<a class="dropdown-item" href="index.php?page=list-marca">Listar</a>
						</div>
					</li>
				</ul>
					<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produto</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=cad-produto">Cadastrar</a>
							<a class="dropdown-item" href="index.php?page=list-produto">Listar</a>
						</div>
					</li>
				</ul>
            </div>
        </nav>
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        include ("config.php");    
                        switch  (@$_REQUEST["page"]){
                                case "cad-marca":
                                    include ("cadastrar-marca.php");
                                break;
                                case "list-marca":
                                    include ("listar-marca.php");
                                break;
                                case "cad-produto":
                                    include ("cadastrar-produto.php");
                                break;
                                case "list-produto":
                                    include ("listar-produto.php");
                                break;
                                default:
                                    include ("home.php");
                            }
                        
                        
                        ?>
                    </div>
                </div>
            </div>
		
		
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>