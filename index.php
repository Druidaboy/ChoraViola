<?php

require("funcoes.php");

error_reporting(E_ALL ^ E_DEPRECATED);

//Conexão com Banco de Dados
$mysqli = new mysqli('localhost', 'root', '', 'chora_viola');
$consulta = "SELECT * FROM chora_viola_precos";
$con = $mysqli->query($consulta) or die($mysqli->error);
//Fim da conexão com Banco de Dados
//Colocando dados do BD nas variáveis
while ($result = $con->fetch_array()) {
	$item01a = $result['item01a'];
	$item02a = $result['item02a'];
	$item03a = $result['item03a'];
	$item04a = $result['item04a'];
	$item05a = $result['item05a'];
}
mysqli_close($mysqli);
//Fim
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chora Viola</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body id="home">
	<div id="container">
		<div id="topo">
			<div id="logo">
			</div>
		</div>
		<div id="menu">
			<ul>
				<li class="home primeiro">
					<a href="index.php">Home</a>
				</li>
				<li class="galeria">
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
		<form method="POST" action="pedido01.php">
			<fieldset>
				<legend>Bebidas</legend>
				<div class="produto01" style="background: url(imagens/cerveja01.jpg) no-repeat;">
					<div class="produto01b"><?= $item01a ?>
						<div class="produto01a">
							<select name="item01">
								<option> </option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
					</div>
				</div>
				<div class="produto01" style="background: url(imagens/cerveja02.jpg) no-repeat;">
					<div class="produto01b"><?= $item02a ?>
						<div class="produto01a">
							<select name="item02">
								<option> </option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
					</div>
				</div>
				<div class="produto01" style="background: url(imagens/espetinho01.jpg) no-repeat;">
					<div class="produto01b"><?= $item03a ?>
						<div class="produto01a">
							<select name="item03">
								<option> </option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
					</div>
				</div>
				<div class="produto01" style="background: url(imagens/espetinho02.jpg) no-repeat;">
					<div class="produto01b"><?= $item04a ?>
						<div class="produto01a">
							<select name="item04">
								<option> </option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
					</div>
				</div>
				<div class="produto01" style="background: url(imagens/x-salada01.jpg) no-repeat;">
					<div class="produto01b"><?= $item05a ?>
						<div class="produto01a">
							<select name="item05">
								<option> </option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div>
					</div>
				</div>
			</fieldset>
			<!-- <input type='date' id='hasta' value='<?php echo date('Y-m-d'); ?>'> -->
			<input class="botao01" type="submit" name="enviar" value="Pedido">
			<input class="botao01" type="reset" value="Cancelar">
		</form>
		<div id="rodape">
			<div id="rodape01">
				&copy; Todos os direitos reservados.
			</div>
		</div>
	</div>
</body>

</html>