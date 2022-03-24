<?php
require("funcoes.php");
error_reporting(E_ALL ^ E_DEPRECATED);

$contador = 1;
//conexão com BD
$servername = "localhost";
$username = "root";
$password = "";
$database = "Chora_Viola";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$query_selected = "SELECT * FROM Chora_Viola_precos";
$sql = mysqli_query($conn, $query_selected) or die("Erro ao executar a query: " . $query_selected);

while ($result = mysqli_fetch_array($sql)) {
	$id = $result['id_precos'];
	$item01 = $result['item01'];
	$item01a = $result['item01a'];
	$item02 = $result['item02'];
	$item02a = $result['item02a'];
	$item03 = $result['item03'];
	$item03a = $result['item03a'];
	$item04 = $result['item04'];
	$item04a = $result['item04a'];
	$item05 = $result['item05'];
	$item05a = $result['item05a'];
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chora Viola</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body id="galeria">
	<div id="container">
		<div id="topo">
			<div id="logo">
			</div>
		</div>
		<div id="menu">
			<ul>
				<li class="home">
					<a href="index.php">Home</a>
				</li>
				<li class="galeria primeiro">
					<a href="galeria.php">Galeria</a>
				</li>
				<li class="noticias">
					<a href="noticias.php">Noticias</a>
				</li>
				<li class="contato">
					<a href="contato.php">Contato</a>
				</li>
				<li class="quemsomos">
					<a href="quemsomos.php">Quem Somos</a>
				</li>
				<li class="institucional">
					<a href="institucional.php">Institucional</a>
				</li>
			</ul>
		</div>
	</div>
	<form method="POST" action="alt_precos_02.php">
		<table align="center" border="1">
			<tr>
				<th height="20">
					<input type="hidden" name="id" value="<?= $id ?>">
					Item:
				</th>
				<th height="20">
					Preço:
				</th>
			</tr>
			<tr>
				<td>
					<input type="text" name="item01" value="<?= $item01 ?>">
				</td>
				<td>
					<input type="text" name="item01a" value="<?= $item01a ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="item02" value="<?= $item02 ?>">
				</td>
				<td>
					<input type="text" name="item02a" value="<?= $item02a ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="item03" value="<?= $item03 ?>">
				</td>
				<td>
					<input type="text" name="item03a" value="<?= $item03a ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="item04" value="<?= $item04 ?>">
				</td>
				<td>
					<input type="text" name="item04a" value="<?= $item04a ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="item05" value="<?= $item05 ?>">
				</td>
				<td>
					<input type="text" name="item05a" value="<?= $item05a ?>">
				</td>
			</tr>
		</table> <br /> <br />
		<a href="">
			<input type="button" name="topo" value="Voltar ao Topo" class="botao-topo">
		</a>
		<a href="">
			<input type="submit" name="salvar" value="Salvar" class="botao-salvar">
		</a>
	</form>
</body>

</html>