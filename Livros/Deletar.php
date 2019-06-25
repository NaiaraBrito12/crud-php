<!DOCTYPE html>
<html>
<head>
	<title>Deletar alunos</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
require_once'conexao.php';


$usuario = $_GET['id'];

$sql = "DELETE FROM leitores WHERE usuario = '$usuario' ";
$r = mysqli_query($con, $sql);
if($r){
	echo "Deletado com sucesso";
}else{
	echo "Erro ao Deletar ";
} 

    ?>


</html>