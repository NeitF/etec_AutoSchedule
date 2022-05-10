<?php
session_start();
include_once("conexao.php");

$nome = $_POST['nome'];
$qtdeTurmas = $_POST['qtdeTurmas'];
$qtdeHorarios = $_POST['qtdeHorarios'];

$sql = "insert into tblNovaTabela (id, nome_tabela, qtdeTurmas, qtdeHorarios) values (NULL, '$nome', '$qtdeTurmas', '$qtdeHorarios')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mt-2">
                    <span class="text-light">Usuário: <span style="color: yellow;"> <?php echo $_SESSION['nome_usuario'] ?> </span> |</span>
                </li>
                <li class="nav-item active mt-2">
                    <span class="text-light ml-1"> Cargo: <span style="color: yellow;"> <?php echo $_SESSION['cargo'] ?> </span> </span>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ml-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Opções
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="tabela.php">Tabela</a>
                        <a class="dropdown-item" href="cadastro.php">Cadastros</a>
                        <a class="dropdown-item" href="labs.php">Laboratórios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

<div class="container">
    <div class="row justify-content-center align-items-center" style="height:50em;">
        <div class="col-6 rounded fundoBranco" style="border: 6px solid #333533;">
                <br><br>
                <h2 class="texto display-4">Tabela criada com sucesso!</h2><br>
                <hr>
                <a href="tabela.php" class="btn btn-outline-danger btn-lg mx-1">Voltar</a>
                <a href="criarTabela.php" class="btn btn-outline-success btn-lg mx-1">Nova tabela</a>
                <br><br>
        </div>
    </div>
</div>


<script src="js/jquery-3.4.1.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>