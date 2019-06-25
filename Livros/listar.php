<!DOCTYPE html>
<html>
<head>
	<title>Visualizar aluno</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		body{
			background-image: url(images.jpg);
		}
		a{
			text-decoration: none;	
		}
		#campo{
                position: relative;
                top: 95px;
                width: 500px;
                height: 400px;
                left: 40%;
                margin-left: -100px;
                padding-top: 50px;
                background: white;
                background-color: rgba(0,0,0,255 255 255);
                font-family:border-color:black;
                border-radius: 10px;
                border: 3px green solid;
                color:#00FFFF;
		}
		#bt{
			margin-left: 45%;
				top: -2%	
			
		}
		.Voltar{
			color:green;
		}
		.letras{
			color:#00FFFF; 
		}
	</style>
</head>
<body>

				<?php include_once('conexao.php');?>
				<div id="campo">
				<table border="1px" align="center">
					<tr>
						<td colspan="6" align="center">Lista de Leitores</td>
					</tr>
				<tr class="letras">
					<td align="center">Usuario</td>
					<td align="center">Nome</td>
					<td align="center">Livro</td>
					<td align="center">Grupo</td>
					<td align="center">Excluir</td>
					<td align="center">Editar</td>
				</tr>
				<button id="bt"><a href="index.php" class="Voltar">Voltar</a></button>
						
			

	<?php
	include_once('conexao.php');
	@$excluir = $_GET['excluir'];

		$r = mysqli_query($con, "DELETE FROM leitores where usuario = $excluir");
		if($r){
			echo "<script>location.href='listar.php';</script>";

		}


	$sql = "SELECT * FROM leitores";

	$r = mysqli_query($con, $sql);
	if($r){
		while ($result=mysqli_fetch_array($r)){?>
		<tr>
			<td><?php echo $result['usuario'];?></td>
			<td><?php echo $result['nome'];?></td>
			<td><?php echo $result['livro'];?></td>
			<td><?php echo $result['grupo'];?></td>
			<td width="60px"><a href="?excluir=<?php echo $result['usuario']; ?>"class="letras" onclick="return confirm('Deseja Realmente Excluir?');">Excluir</td>
			<td><a href="update.php?id=<?php echo $result['usuario'];?>&nome=<?php echo $result['nome']; ?>&livro=<?php echo $result['livro'];?>&grupo=<?php echo $result['grupo']; ?>"class="letras" onclick="return confirm('Deseja Realmente atualizar?');"> Editar</td>
		</tr>

			<?php
		}
	}
			?>
</table>


</div>
</body>
</html>