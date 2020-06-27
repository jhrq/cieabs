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
                    <a class="nav-link" href="index.php">INÍCIO</a>
                </li>                
            </ul>
        </div>  
    </nav>
    <br>

    <h1 id="main-title"> Cadastro </h1>

    <?php
        if(isset($_SESSION['usuario_existe'])):
    ?>
    <div id="alert-red"> ERRO: Este usuário já existe. Tente outro </div>
    <?php
        endif;
        unset($_SESSION['usuario_existe']);
    ?>

    <?php
        if(isset($_SESSION['status_cadastro'])):
    ?>  
    <div class="alert-green"> Sua conta foi cadastrada com sucesso. Faça o login <a href="index.php"> aqui. </a> </div>
    <?php
        endif;
        unset($_SESSION['status_cadastro']);
    ?>

    <form id="cadastro" action="cadastrar.php" method="POST">
        
        <div class="form-group">
            <label for="inputAddress2"> Código de matrícula </label>
            <input type="text" name="codigo" class="form-control" id="inputAddress2" placeholder="Apenas 6 dígitos. Ex: 123456" required>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" required>
            </div>
        
            <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputAddress"> Nome Completo </label>
            <input type="text" name="nome" class="form-control" placeholder="José Henrique dos Santos Almeida" required>
        </div>


        <button type="submit" class="btn btn-danger" id="btnCadastrar"> Cadastrar </button>
    </form>
    
</body>
</html>
