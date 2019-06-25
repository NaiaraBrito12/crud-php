<?php  

include_once'conexao.php';
$usuar = $_POST['usuario'];
$nom = $_POST['nome'];
$livr = $_POST['livro'];
@$grup = $_POST['grupo'];


$sql = "INSERT INTO leitores (usuario,nome,livro,grupo) VALUES ('$usuar','$nom', '$livr', '$grup')";
$r = mysqli_query($con,$sql);

if($r){
	echo "cadastrado com sucesso";
}else{
	echo "erro ao cadastrar";
}

?>