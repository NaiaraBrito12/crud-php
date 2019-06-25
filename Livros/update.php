<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Alunos</title>
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
                height: 350px;
                background: white;
                background-color: rgba(0,0,0,255 255 255);
                border-radius: 10px;
                border: 3px green solid;
		}
		.formulario{
			position: absolute;
			left: 30px;
		}
	</style>
</head>
<body>
	<?php 
		
		 include_once "conexao.php";
          if(isset($_POST['Atualizar'])){
              @$usuario = $_POST['usuario'];
              @$nome = $_POST['nome'];
              @$livro = $_POST['livro'];
              @$grupo = $_POST['grupo'];
             @$antigo = $_POST['antigo'];

		$r = mysqli_query($con, "UPDATE leitores SET nome = '$nome', usuario = $usuario, livro = '$livro', grupo = '$grupo' WHERE usuario = $antigo");
		if($r){
			echo "<script>alert('Editado com sucesso');location.href='listar.php';</script>";
		}else{
			echo "<script>alert('Erro ao editar');location.href='listar.php';</script>";
		}
		}

		?>
	<div id="divCenter">
	<h1 align="center">Atualizar-se Leitores</h1>

	<form method="post" class="formulario">
     <input type="text" name="usuario" id="usuario" size="15" value="<?php echo $_GET['id']?>"/><br><br>	
     <input type="text" name="nome" id="nome" size="15" value="<?php echo $_GET['nome']?>"/><br><br>
     <input type="text" name="livro" id="livro" size="15" value="<?php echo $_GET['livro']?>"/><br><br>
     <input type="text" name="grupo" id="grupo" size="15" value="<?php echo $_GET['grupo']?>"/><br><br>
     
     <input hidden="true" type="text" name="antigo" value="<?php echo $_GET['id']?>" />
 
    <p><input type="submit" name="Atualizar" value="Atualizar"/>
	<button><a href="listar.php">Voltar</a></button></p>
</body>
</html>