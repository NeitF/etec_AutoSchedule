<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Auto-Schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device=width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./mycss/style.css">
</head>
<body>

<div class="container animacao">
    <div class="row justify-content-center align-items-center" style="height:55em;">
        <div class="col-8 rounded" style="background-color: #F3DE8A; border: 6px solid #333533;">
                <img src="imagens/auto-schedule.png" width="500px" class="mx-auto d-block">
                <br><br>
                <h3 class="texto">Seja bem-vindo(a) ao sistema!</h3><br>

                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="erro texto">
                      <p style="color: red;">ERRO: Valores inseridos inválidos.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>

                <form class="texto negrito" method="POST" action="login.php">
                    <label>Código da instituição:</label>
                    <br>
                    <input name="instituicao" type="text" size="20"><br>
                    <label>Código de Usuário:</label>
                    <br>
                    <input name="codUsuario" type="text" size="20"><br>
                    <label>Senha:</label>
                    <br>
                    <input name="senha" type="password" size="20"><br><br>
                    <button type="submit" class="btn btn-dark mx-1">Entrar</button>
                    <!--<a href="tabela.php" class="btn btn-dark mx-1">Login</a>-->
                </form>

                <br>
                <p>
                    Problemas para realizar login? Clique <a href="">aqui</a><br>
                    Cadastre sua escola ou empresa <a href="">aqui</a>
                </p>
            
        </div>
    </div>
</div>


<script src="js/jquery-3.4.1.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>