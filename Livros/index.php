<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8"/>
	<style type="text/css">
	.menu ul{
	list-style: none;
	border: 1px solid #c0c0c0;
	float: right;
	z-index: 9999; 
	margin-right: 460px;
}
.menu ul li{
	position: relative;
	float: left;
	border-right: 1px solid #c0c0c0;
	z-index: 9999;
}
.menu ul li a{
	color: white; 
	text-decoration: none;
	padding: 10px 20px;
	display: block;
	background-color: #000;
}
.menu ul li a:hover{
	background: #333;
	color: blue;
	-moz-box-shadow:0 3px 10px 0 #ccc;
	-webkit-box-shadow:0 3px 10px 0 #ccc;
	text-shadow: 0 0 5px #fff;
}
.menu ul li ul{
	position: absolute;
	top: 25px;
	font-size: 12px;
	left: 0;
	background-color: #fff;
	display:none;
}
.menu ul li:hover ul, .menu ul li.over ul{display: block;}

.menu ul li ul li{
	border: 1px solid #c0c0c0;
	display: block;
	width: 150px;
}

.menu{position: absolute; left: 50%; transform: translate(-50%,0);}

.menu{
	padding-top: 2px;
	box-sizing: border-box;
	position: relative;
	width: 1200px;
	height: 70px;
	background
	z-index: 9999;
}
li{display:inline}
a:link{text-decoration:none; color:#ff0000;  padding:16px}
a:hover{background:#e0ffff}
a:visited{color:#0000ff}
h1{background:#000 ; color: #ffffff}
input{background:#000; color:#ffffff;}

	</style>
</head>
<body bgcolor="#e3fbe3">
	<h1 align="center">Cadastro De Leitores</h1>
	<div class="menu">
	<ul>  
    <li><a href="#">Cadastrar</a> 
      <ul> 
        <li><a href="cadastro.php">leitores</a></li> 
      </ul> 
    </li><li><a href="#">Pesquisar</a> 
      <ul> 
        <li><a href="listar.php">leitores</a></li> 
      </ul> 
  </div>

</body>
</html>