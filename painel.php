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
        <a class="navbar-brand" href="#"> Olá, <?php echo $_SESSION['usuario'];?> </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="tablinks" type="button" id="navButton" onclick="location.href='index.php'">INÍCIO</button>
                </li>
                
                <li class="nav-item">
                    <button class="tablinks" type="button" id="navButton" onclick="location.href='logout.php'"> SAIR</button>
                </li>
            </ul>
        </div>  
    </nav>
    <br>    

        <?php
        if(isset($_SESSION['status_envio'])):
        ?>
        <div class="alert-green"> Enviado com sucesso! Sinta-se a vontade para enviar outra análise! :) </div>
        <?php
        endif;
        unset($_SESSION['status_envio']);
        ?>

        <div class="d-flex justify-content-center">
        <div class="card" id="Annotations">
            
            <div class="card-header" id="input-title"> Preencha todos os campos. </div>
            
                <div class="card-body"> 
                
                    <form id="formulario" action="send-analisis.php" method="POST">
                        <div class="selections">
                        <label id="input-title"> Como você se sente na sua sala atual? </label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio1" value="Insatisfeito">
                            <label class="form-check-label" id="input-title" for="inlineRadio1">Insatisfeito</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio2" value="Satisfeito" checked>
                            <label class="form-check-label" id="input-title" for="inlineRadio2">Satisfeito</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio3" value="Muito bom">
                            <label class="form-check-label" id="input-title" for="inlineRadio3">Muito bom</label>
                        </div>
                         <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio3" value="Excelente">
                            <label class="form-check-label" id="input-title" for="inlineRadio3">Excelente</label>
                            <br>
                        </div>

                        </div>
                        
                        <div class="form-row" id="selections">

                            <div class="form-group col-md-6">
                                <label id="input-title" for="exampleFormControlSelect1">Selecione o andar onde sua sala se encontra: </label>
                                <select class="form-control" name="andar" required>
                                    <option value="">Selecione...</option>
                                    <option value="Terreo">Terreo</option>
                                    <option value="1º andar">1º Andar</option>
                                    <option value="2º andar">2º Andar</option>
                                    <option value="3º andar">3º Andar</option>
                                    <option value="4º andar">4º Andar</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label id="input-title" for="exampleFormControlSelect1"> Selecione a sala referente ao andar escolhido: </label>
                                <select class="form-control" name="sala" required>
                                    <option value="">Selecione...</option>
                                    <option value="Sala 01">Sala 01</option>
                                    <option value="Sala 02">Sala 02</option>
                                    <option value="Sala 03">Sala 03</option>
                                    <option value="Sala 04">Sala 04</option>
                                    <option value="Sala 05">Sala 05</option>
                                </select>
                            </div>
                        </div>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                        Nossas salas são enumeradas por centanas tal que, o primeiro número da centena corresponde o primeiro digito e em seguida a sala. Ex: Sala 03 do 4º andar: 403.
                        </small>
                        <br>
                        <div class="form-group"> 
                            <label id="input-title" for="exampleFormControlTextarea1"> Digite aqui suas considerações a respeito: (Opcional)</label>
                            <textarea class="form-control" name="texto" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-danger" id="btn-enviar" onclick=""> Enviar </button>
                    </form>
                </div>
            
            </div>  

        </div>

    </div>
</body>
</html>
