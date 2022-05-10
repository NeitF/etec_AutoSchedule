<?php
session_start();
include_once("conexao.php");

$codigoDeBusca = 0;

if($_POST){
    $acao = "";

	if(isset($_REQUEST["acao"])){
		$acao = $_REQUEST["acao"];
    }
    
    $tabelas = $_REQUEST['tabelas'];

    if($acao == "buscar"){
       $sql = "select * from tblNovaTabela Where nome_tabela =" ."'$tabelas'";
       $result = mysqli_query($conexao, $sql);
       if(mysqli_affected_rows($conexao) > 0){
            $registro = mysqli_fetch_array($result);
            $codigoDeBusca = $registro["id"];
       }
    }
}

?>

<html>
<head>
    <title>Auto-Schedule</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device=width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./mycss/style.css">
    <script language="jscript" type="text/jscript">
        function fnBuscarTabela(opcao){
            document.frmEscolha.action="./tabela.php?acao=" + opcao;
            document.frmEscolha.submit();
            return false;
        }
    </script>
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

    <div class="tbody">
    <table width="100%" cellpadding="0px" cellspacing="0px">
        <tr>
            <td height="100px" class="centro fundoBranco">
                <a href="criarTabela.php" class="btn btn-lg btn-warning mx-3 d-inline-block h-50 mt-4">Criar tabela</a>
                <a href="edicaoTabela.php" class="btn btn-lg btn-warning mx-3 d-inline-block h-50 mt-4">Editar tabela</a>
            </td>
        </tr>
    </table>

    <table width="100%" cellpadding="0px" cellspacing="0px" border="1" style="border: 6px solid #333533;" >

        <?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $sql = "Select qtdeTurmas, qtdeHorarios from tblNovaTabela Where id =" .$codigoDeBusca;
            $salvar = mysqli_query($conexao, $sql);
            $registro = mysqli_fetch_array($salvar);
            $horarios = $registro["qtdeHorarios"];
            $turmas = $registro["qtdeTurmas"];
        ?>
            <tr>
                     <!--TD vazia-->
                    <td width="10%" height="50px" class="texto fundoBranco">
                        
                    </td>

                <!--TD do nome das turmas-->
                    <?php 
                    $s = 0;
                    while($s < $turmas){ ?> 
                        <td width="200px" height="50px" class="texto fundoBranco">
                            Turma
                        </td>

                    <?php
                    $s++;
                    }
                    ?>
            </tr>    

            <?php 
               $i = 0;
               while($i < $horarios){ ?>
                   <tr>

                   <!--TD dos horários-->
                   <td width="10%" height="50px" class="texto fundoBranco">
                        00:00
                    </td>

                    <?php 
                        
                        $j = 0;
                        while($j < $turmas){ ?>
                        <!--TD das matérias-->
                            <td width="200px" height="50px" class="texto fundoBranco">
                    
                            </td>
                        <?php
                        $j++;
                        }   
                        ?> 
                   </tr> 
                <?php
                $i++;
               }  
               ?>
               
    </table>
        <p style="color: #fff;" class="centro mt-2">Selecionar tabela: </p>
        
        <form name="frmEscolha" method="post" action="">
                <div class="centro">
                    <a href="#" onClick="fnBuscarTabela('buscar')" class="btn btn-success btn-sm" style="width: 250px;">Buscar</a>
                </div>
                <div class="centro mt-0">
                    <br><br>
                    <input name="tabelas" type="text" list="tables" size="30">
                    <datalist id="tables">
                    <?php 
                        $sql = "Select * from tblNovaTabela";
                        $salvar = mysqli_query($conexao, $sql);
                        while($rows_afetadas = mysqli_fetch_assoc($salvar)) { ?>
                            <option value="<?php echo $rows_afetadas['nome_tabela']; ?>">
                            </option> <?php
                        }
                        ?>
                       
                    </datalist>
                </div>
        </form>
    </div>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>