<?php
session_start();
include_once("conexao.php");

$turma = $_POST['turma'];
$codigo = $_POST['codigo'];

$sql = "insert into tblTurma (turmaNome, turmaCodigo) values ('$turma', $codigo)";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>

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

<div class="tbody2">
<table width="100%" class="fundoBranco" cellpadding="0px" cellspacing="0px" border="0">
<tr>
        <td height="100px">
            <a href="tabela.php" class="btn btn-lg btn-outline-danger d-inline-block h-50 mx-2"><--</a> 
            <a href="cadastro.php" class="btn btn-lg btn-warning d-inline-block h-50 mx-2">Professores</a>
            <a href="turma.php" class="btn btn-lg btn-warning d-inline-block h-50 mx-2">Turmas</a>
            <a href="materia.php" class="btn btn-lg btn-warning d-inline-block h-50 mx-2">Matérias</a>
        </td>
    </tr>
</table>
    <div class="container fundoBranco">
        <div class="row">
            <div class="col-7 mt-5">
                <h2>Turma cadastrada com sucesso!</h2>      
                <br><br><br>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.4.1.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>