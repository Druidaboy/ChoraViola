<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chora Viola</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body id="noticias">
	<div id="container">
		<div id="topo">
			<div id="logo">
			</div>
		</div>
		<div id="menu">
			<ul>
				<li class="Home">
					<a href="index.php">Home</a>
				</li>
				<li class="galeria">
					<a href="galeria.php">Galeria</a>
				</li>
				<li class="noticias primeiro">
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
					Item:
				</th>
				<th height="20">
					Preço:
				</th>
			</tr>
			<tr>
				<td>
					<input type="text" name="">
				</td>
				<td>
					<input type="text" name="">
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