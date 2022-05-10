<?php
session_start();
include_once("conexao.php");
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
            <div class="col-6 mt-5">
                <h2>Realizar cadastro dos professores</h2>
                <form method="post" action="processarProf.php">
                    <label class="mt-4">Nome:</label>
                    <br>
                    <input name="nome" type="text" size="30">
                    <br><br>
                    <label>CPF:</label>
                    <br>
                    <input name="cpf" type="text" size="30">
                    <br><br>
                    <label>Matéria(s):</label>
                    <br>
                    <input name="lista" type="text" list="opcoes" height="50px" size="30">
                    <datalist id="opcoes">
                    <?php
                        $sql = "select * from tblMaterias";
                        $salvar = mysqli_query($conexao, $sql);
                        while($rows_afetadas = mysqli_fetch_assoc($salvar)){ ?>
                            <option value="<?php echo $rows_afetadas['materiaNome']; ?>">
                            </option> <?php
                        }
                        ?>
                
                    </datalist>
                    <br><br>
                    <input type="submit" value="Salvar" class="btn btn-lg btn-success mx-1">
                    <input type="reset" value="Limpar" class="btn btn-lg btn-secondary mx-1">            
                </form>
               
            </div>
            <div class="col-5">
                <h2 class="mt-5">Disponibilidade de horários</h2>
                <table width="400px" class="mt-3" cellpadding="0px" cellspacing="0px" border="1">
                    <tr>
                        <td width="50px" height="50px" class="texto2">
                            
                        </td>
                        <td height="50px" class="texto2">
                            Turma A
                        </td>
                        <td height="50px" class="texto2">
                            Turma B
                        </td>
                        <td height="50px" class="texto2">
                            Turma C
                        </td>
                        <td height="50px" class="texto2">
                           Turma D
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            07:40
                        </td>
                        <td height="50px" class="disponivel">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            08:30
                        </td>
                        <td height="50px" class="disponivel">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            09:20
                        </td>
                        <td height="50px" >
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px" class="disponivel">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            10:30
                        </td>
                        <td height="50px" >
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px" class="disponivel">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            11:20
                        </td>
                        <td height="50px" >
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            13:10
                        </td>
                        <td height="50px" class="disponivel">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            14:00
                        </td>
                        <td height="50px" class="disponivel">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>

                    <tr>
                        <td height="50px">
                            14:50
                        </td>
                        <td height="50px" >
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                        <td height="50px">
                            
                        </td>
                    </tr>
                </table>
                <div class="centro mt-2">
                    <button class="btn btn-warning mx-2"><-- Anterior</button>
                    <button class="btn btn-warning mx-2">Próximo --></button>
                </div>
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