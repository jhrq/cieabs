<!DOCTYPE html>
<html lang="pt-BR">

<head> 
    <?php
        session_start();
        include('verify_login.php');
    ?>

    <meta charset="UTF-8">
    <title> Sistema de Análises Estruturais</title>
    

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="js/script.js"></script>
 		

    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #C82333;">
        <a class="navbar-brand" href="#"> Área para adminstradores </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="tablinks" type="button" id="navButton" onclick="location.href='index.php'"> Início</button>
                </li>
                
                <li class="nav-item">
                    <button class="tablinks" type="button" id="navButton" onclick="location.href='logout.php'"> Sair</button>
                </li>   
            </ul>
        </div>  
    </nav>
    <br>

    <h2 id="main-title"> Lista de todas as recomendações </h2>
	

	


</body>
</html>