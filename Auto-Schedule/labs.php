<?php
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Auto-Schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device=width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./mycss/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

    <style>
        #icone{
            font-size: 60px;
        }

        .fonteLabs{
            font-size: 30px;
        }

        .indisponivel{
            background-color: red;
            color: #fff;
        }

        .botoes{
            float: right;
        }
    </style>

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
    <div class="row justify-content-center align-items-center" style="height:55em;">
        <div class="col-12 rounded fundoBranco" style="border: 6px solid #333533;">
                <p class="mx-auto d-block">
                    <h2 class="texto">Laboratórios disponíveis</h2>
                </p>
                <br><br>
            
                <i class="material-icons" id="icone">laptop_windows</i>
                <span class="ml-2 fonteLabs">Laboratório 1</span>
                <span class="ml-4 mr-5">Status: <span class="disponivel">Disponível</span></span>
                <button class="btn btn-warning mt-4 botoes" type="button" data-toggle="collapse" data-target="#lab1" aria-expanded="false" aria-controls="lab1">
                    Reservar laboratório
                </button>
                <div class="collapse" id="lab1">
                    <div class="card card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do professor:</label>
                            <input type="email" class="form-control" id="NomeProfessor" aria-describedby="emailHelp" placeholder="Insira o nome">
                        </div>
                        <label for="horario">Escolha o horário: </label>
                        <select name="horarios" id="hrarios">
                            <option value="7:40">7:40</option>
                            <option value="9:20">9:20</option>
                            <option value="11:20">11:20</option>
                            <option value="13:10">13:10</option>
                        </select>
                        <br>
                        <label for="horario">Escolha a data: </label>
                        <select name="horarios" id="hrarios">
                            <option value="7:40">4/12</option>
                            <option value="9:20">7/12</option>
                            <option value="11:20">8/12</option>
                            <option value="13:10">9/12</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success">Reservar</button>
                    </form>
                    </div>
                </div>
                <hr>

                <i class="material-icons" id="icone">laptop_windows</i>
                <span class="ml-2 fonteLabs">Laboratório 2</span>
                <span class="ml-4">Status: <span class="indisponivel">Indisponível</span></span>
                <p class="mt-4 botoes">
                    Indisponível para reserva
                </p>
                <hr>

                <i class="material-icons" id="icone">laptop_windows</i>
                <span class="ml-2 fonteLabs">Laboratório 3</span>
                <span class="ml-4">Status: <span class="indisponivel">Indisponível</span></span>
                <p class="mt-4 botoes">
                    Indisponível para reserva
                </p>
                <hr>

                <i class="material-icons" id="icone">laptop_windows</i>
                <span class="ml-2 fonteLabs">Laboratório 4</span>
                <span class="ml-4">Status: <span class="disponivel">Disponível</span></span>
                <button class="btn btn-warning mt-4 botoes" type="button" data-toggle="collapse" data-target="#lab4" aria-expanded="false" aria-controls="lab4">
                    Reservar laboratório
                </button>
                <div class="collapse" id="lab4">
                    <div class="card card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do professor:</label>
                            <input type="email" class="form-control" id="NomeProfessor" aria-describedby="emailHelp" placeholder="Insira o nome">
                        </div>
                        <label for="horario">Escolha o horário: </label>
                        <select name="horarios" id="hrarios">
                            <option value="7:40">7:40</option>
                            <option value="9:20">9:20</option>
                            <option value="11:20">11:20</option>
                            <option value="13:10">13:10</option>
                        </select>
                        <br>
                        <label for="horario">Escolha a data: </label>
                        <select name="horarios" id="hrarios">
                            <option value="7:40">4/12</option>
                            <option value="9:20">7/12</option>
                            <option value="11:20">8/12</option>
                            <option value="13:10">9/12</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success">Reservar</button>
                    </form>
                    </div>
                </div>
                <hr>

                <i class="material-icons" id="icone">laptop_windows</i>
                <span class="ml-2 fonteLabs">Laboratório 5</span>
                <span class="ml-4">Status: <span class="disponivel">Disponível</span></span>
                <button class="btn btn-warning mt-4 botoes" type="button" data-toggle="collapse" data-target="#lab5" aria-expanded="false" aria-controls="lab5">
                    Reservar laboratório
                </button>
                <div class="collapse" id="lab5">
                    <div class="card card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do professor:</label>
                            <input type="email" class="form-control" id="NomeProfessor" aria-describedby="emailHelp" placeholder="Insira o nome">
                        </div>
                        <label for="horario">Escolha o horário: </label>
                        <select name="horarios" id="hrarios">
                            <option value="7:40">7:40</option>
                            <option value="9:20">9:20</option>
                            <option value="11:20">11:20</option>
                            <option value="13:10">13:10</option>
                        </select>
                        <br>
                        <label for="horario">Escolha a data: </label>
                        <select name="horarios" id="hrarios">
                            <option value="7:40">4/12</option>
                            <option value="9:20">7/12</option>
                            <option value="11:20">8/12</option>
                            <option value="13:10">9/12</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success">Reservar</button>
                    </form>
                    </div>
                </div>
                <hr>

                <i class="material-icons" id="icone">laptop_windows</i>
                <span class="ml-2 fonteLabs">Laboratório 6</span>
                <span class="ml-4">Status: <span class="indisponivel">Indisponível</span></span>
                <p class="mt-4 botoes">
                    Indisponível para reserva
                </p><br><br>
                
             
               
            
        </div>
    </div>
</div>


<script src="js/jquery-3.4.1.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>