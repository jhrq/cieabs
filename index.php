<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head> 
    <meta charset="UTF-8">
    <title> Sistema de Análises Estruturais</title>
    

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">
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
        <a class="navbar-brand" href="#">Centro Integrado de Educação Ana Beatriz - CIEABS </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="tablinks" id="navButton" onclick="openNav(event, 'cardLogin')">INÍCIO</button>
                </li>
                
                <li class="nav-item">
                    <button class="tablinks" id="navButton" onclick="openNav(event, 'quemSomos')"> QUEM SOMOS </button>
                </li>
                
                <li class="nav-item">
                    <button class="tablinks" id="navButton" onclick="openNav(event, 'faq')">FAQ</button>
                </li>    
            </ul>
        </div>  
    </nav>
    <br>

    <h1 id="main-title">Sistema de análises estruturais </h1>
	
	<?php 
		if(isset($_SESSION['NAOAUTENTICADO'])):
	?>
	
	<div id="alert-red"> ERRO: Usuário ou senha inválidos. </div>
	
	<?php 
		endif;
		unset($_SESSION['NAOAUTENTICADO']);
	?>

	<div class="d-flex justify-content-center">
		<div class="tabcontent card bg-light mb-3" id="cardLogin">
  			
  			<div class="card-header" id="card-header">Faça login para continuar </div>
  			
  			<div class="card-body"> 
  				
  				<form action="login.php" method="POST">

  					<div class="form-group">
    					<label for="exampleInputEmail1" id="input-title">Usuário</label>
    					<input type="text" name="usuario" class="form-control" placeholder="Digite seu usuário..." required>
  					</div>
  					
  					<div class="form-group">
    					<label for="exampleInputPassword1" id="input-title">Senha</label>
    					<input type="password" name="senha" class="form-control" placeholder="Digite sua senha..." required>
  					</div>
  					
  					<button type="submit" class="btn btn-danger" id="btn-login">Login</button>

				</form>

			</div>	
  					
 			<div class="card-footer"> <a href="cadastro.php">Ainda não tem uma conta? Crie gratuitamente!</a> </div>

		</div>

	</div>


        <div id="quemSomos" class="tabcontent" style="display: none;">
          <h1 id="main-title"> Quem somos? </h1> 
          
          <p id="main-paragraph"> Somos uma escola a fim de evoluir. Com este site, podemos ouvir nossos queridos alunos e, com base nas suas sugestões e críticas, buscamos todo fim e início de ano, re-ativar nosso site para que possamos recolher informações e realizar nossas reformas anuais. Sua opnião, usuário, é muito importante, pois almeijamos sempre o conforto de nossos docentes. mais informações sobre como utilizar este site, sugerimos a aba "FAQ", onde respondemos as perguntas mais frequentes. </p>
        </div>
        
        <div class="tabcontent" id="faq" style="display: none;"> 
    
            <p class="pergunta"> Como Funciona o site? </p>
            <ul>
              <li> Você realiza o seu cadastro, escolhe qual andar e qual sala deseja fazer sua reclamação ou sugestão. </li>
            </ul>

            <p class="pergunta"> Posso realizar mais de uma análise? </p>
            <ul>
              <li> Sim. Sua análise ajudará bastante em nosso banco de dados, visto que o conforto e comodidade do nosso alunos é prioridade. 
              </li>
            </ul>

            <p class="pergunta"> Quais dados preciso para o cadastro? </p>
            <ul>
              <li> Apenas nome completo, data de nascimento e sua matrícula escolar. </li>
            </ul>

            <p class="pergunta"> Minha análise não foi ouvida! O que fazer? </p>
            <ul>
              <li> Nosso sistema funciona sobre votação de maioria. Realizamos uma análise geral de todas as reclamações e sugestões, e tentamos ser o mais democrático possível em selecionar quais salas precisam de nosso apoio na reforma anual. </li>
            </ul>
        </div>

	<footer class="page-footer font-small blue" id="main-footer">
		Desenvolvendo uma aplicação web, 2020.1 
	</footer>


</body>
</html>
