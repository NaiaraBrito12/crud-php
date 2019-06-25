<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
	<meta charset="utf-8"/>
	<style type="text/css">
    body{
      background-image: url(images.jpg);
    }
		#divCenter{
			 	position: relative;
			 	top: 200px;
			 	margin: 0 auto;
                width: 200px;
                height: 400px;
                background: white;
                background-color: rgba(1,1,1,255 255 255);
                border-radius: 10px;
                border: 3px green solid;
		}
		.formulario{
			position: absolute;
			left: 30px;
      color: black;
		}
    #cadastro{
      color: black;
    }
	</style>
</head>
<body>
	<div id="divCenter">
	<h1 align="center" id="cadastro">cadastro</h1>

	<form method="POST" action="inserir.php" class="formulario">
    Usuario:<br><input type="text" name="usuario" id="usuario" size="15" /><br><br>	
    Nome: <input type="text" name="nome" id="nome" size="15" /><br><br>
    Livro: <input type="text" name="livro" id="livro" size="15"/><br><br>
    Grupo: <input type="text" name="grupo" id="grupo" size="15"/><br><br>
     
 
    <p><input type="submit" name="cadastrar-se" value="cadastrar-se"/>
	<button><a href="index.php">Voltar</a></button></p>

<?php
          include_once "conexao.php";
          if(isset($_POST['cadastrar-se'])){
              $usuario = $_POST['usuario'];
              $nome = $_POST['nome'];
              $livro = $_POST['livro'];
              $grupo = $_POST['grupo'];
              mysqli_query($con,"INSERT INTO leitores (usuario, nome, livro, grupo)VALUES('$usuario', '$nome', '$livro', '$grupo')");
              mysqli_close($con);
          }
        ?>

</form>
</div>
</body>
</html>
