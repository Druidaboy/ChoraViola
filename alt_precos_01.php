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
    $id = $result['id_precos'];
    $item01 = $result['item01'];
    $item01a = $result['item01a'];
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
        <form method="POST" action="alt_precos_01a.php">
                <table align="center" border="1">
                    <tr>
                        <th width="400px" height="20">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            Item:
                        </th>
                        <th width="100px" height="20">
                            Preço:
                        </th>
                        <th width="100px" height="20">
                            Alterar:
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="item01" value="<?= $item01 ?>">
                            <?= $item01 ?>
                        </td>
                        <td>
                            <input type="hidden" name="item01a" value="<?= $item01a ?>">
                            <?= $item01a ?>
                        </td>
                        <td>
                            <a href="alt_precos_01.php">Alterar</a>
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
            <div id="rodape">
                <div id="rodape01">
                    &copy; Todos os direitos reservados.
                </div>
            </div>
    </div>
</body>

</html>