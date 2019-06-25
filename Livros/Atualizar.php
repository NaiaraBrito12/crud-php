<?php
include_once 'conexao.php';
$usuar = $_POST['usuario'];
$nom = $_POST['nome'];
$livr = $_POST['livro'];
$grup = $_POST['grupo'];
$sql "UPDATE * FROM leitores SET nome = '$leitores' livro = '$livr' = grupo '$grup' WHERE '$usuar' = usuario";
$r = mysqli_query($con, $sql);
if($r){
	echo "Atualizado com Sucesso!";
}else{
	echo "Ops ocorreu um erro!";
}?>