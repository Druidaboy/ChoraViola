<?php

require("funcoes.php");

error_reporting(E_ALL ^ E_DEPRECATED);

//Inserindo data e hora
date_default_timezone_set('America/Buenos_Aires');
$DateAndTime = date('d/m/Y', time());
date_default_timezone_set('America/Buenos_Aires');
$DateAndTime01 = date('H:i:s', time());

//Conexão com Banco de Dados
$mysqli = new mysqli('localhost', 'root', '', 'chora_viola');
$consulta = "SELECT * FROM chora_viola_precos";
$con = $mysqli->query($consulta) or die($mysqli->error);
//Fim da conexão com Banco de Dados
//Colocando dados do BD nas variáveis
while ($result = $con->fetch_array()) {
    $preco01  = $result['item01'];
    $preco01a  = $result['item01a'];
    $preco02  = $result['item02'];
    $preco02a  = $result['item02a'];
    $preco03  = $result['item03'];
    $preco03a  = $result['item03a'];
    $preco04  = $result['item04'];
    $preco04a  = $result['item04a'];
    $preco05  = $result['item05'];
    $preco05a  = $result['item05a'];
}
mysqli_close($mysqli);
//Fim

//Identificador do produto para o BD
$produto01 = 1;
$produto02 = 2;
$produto03 = 3;
$produto04 = 4;
$produto05 = 5;

// Colocando descrição nos itens do pedido
$item01 = $_POST['item01'];
$item01a = $item01;
$item02 = $_POST['item02'];
$item02a = $item02;
$item03 = $_POST['item03'];
$item03a = $item03;
$item04 = $_POST['item04'];
$item04a = $item04;
$item05 = $_POST['item05'];
$item05a = $item05;

// Calculando valor total

if ($item01 >= 1) {
    $subtotal01 = ($item01 * $preco01a);
} else {
    $subtotal01 = 0;
}
if ($item02 >= 1) {
    $subtotal02 = ($item02 * $preco02a);
} else {
    $subtotal02 = 0;
}
if ($item03 >= 1) {
    $subtotal03 = ($item03 * $preco03a);
} else {
    $subtotal03 = 0;
}
if ($item04 >= 1) {
    $subtotal04 = ($item04 * $preco04a);
} else {
    $subtotal04 = 0;
}
if ($item05 >= 1) {
    $subtotal05 = ($item05 * $preco05a);
} else {
    $subtotal05 = 0;
}
$total = $subtotal01 + $subtotal02 + $subtotal03 + $subtotal04 + $subtotal05;

// If que esvazia variáveis de itens que não foram pedido para não aparecer valor

if ($item01a < 1) {
    $preco01 = "";
    $preco01a = "";
    $produto01 = "";
} else {
    $preco01a  = number_format($preco01a, 2, ',', '.');
}
if ($item02a < 1) {
    $preco02 = "";
    $preco02a = "";
    $produto02 = "";
} else {
    $preco02a  = number_format($preco02a, 2, ',', '.');
}
if ($item03a < 1) {
    $preco03 = "";
    $preco03a = "";
    $produto03 = "";
} else {
    $preco03a  = number_format($preco03a, 2, ',', '.');
}
if ($item04a < 1) {
    $preco04 = "";
    $preco04a = "";
    $produto04 = "";
} else {
    $preco04a  = number_format($preco04a, 2, ',', '.');
}
if ($item05a < 1) {
    $preco05 = "";
    $preco05a = "";
    $produto05 = "";
} else {
    $preco05a  = number_format($preco05a, 2, ',', '.');
}

$total  = number_format($total, 2, ',', '.');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido 01</title>
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
        <form method="POST" action="pedido02.php">
            <div id="imprimir">
                <table class="lista-pedido">
                    <tr>
                        <th>
                            <?= $DateAndTime ?>
                            <input type="hidden" name="data" value="<?= $DateAndTime ?>">
                        </th>
                        <th>
                            <?= $DateAndTime01 ?>
                            <input type="hidden" name="hora" value="<?= $DateAndTime01 ?>">
                        </th>
                    </tr>
                    <tr>
                        <th id="larg-tab01">
                            Produto:
                        </th>
                        <th id="larg-tab02">
                            Preço:
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <?= $item01a . " " . $preco01 ?>
                            <input type="hidden" name="produto01" value="<?= $produto01 ?>">
                            <input type="hidden" name="item01" value="<?= $item01 ?>">
                            <input type="hidden" name="preco01" value="<?= $preco01 ?>">
                        </td>
                        <td>
                            <?= $preco01a ?>
                            <input type="hidden" name="preco01a" value="<?= $preco01a ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $item02a . " " . $preco02 ?>
                            <input type="hidden" name="produto02" value="<?= $produto02 ?>">
                            <input type="hidden" name="item02" value="<?= $item02 ?>">
                            <input type="hidden" name="" value="<?= $preco02 ?>">
                        </td>
                        <td>
                            <?= $preco02a ?>
                            <input type="hidden" name="preco02a" value="<?= $preco02a ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $item03a . " " . $preco03 ?>
                            <input type="hidden" name="produto03" value="<?= $produto03 ?>">
                            <input type="hidden" name="item03" value="<?= $item03a ?>">
                            <input type="hidden" name="" value="<?= $preco03 ?>">
                        </td>
                        <td>
                            <?= $preco03a ?>
                            <input type="hidden" name="preco03a" value="<?= $preco03a ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $item04a . " " . $preco04 ?>
                            <input type="hidden" name="produto04" value="<?= $produto04 ?>">
                            <input type="hidden" name="item04" value="<?= $item04a ?>">
                            <input type="hidden" name="" value="<?= $preco04 ?>">
                        </td>
                        <td>
                            <?= $preco04a ?>
                            <input type="hidden" name="preco04a" value="<?= $preco04a ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $item05a . " " . $preco05 ?>
                            <input type="hidden" name="produto05" value="<?= $produto05 ?>">
                            <input type="hidden" name="item05" value="<?= $item05a ?>">
                            <input type="hidden" name="" value="<?= $preco05 ?>">
                        </td>
                        <td>
                            <?= $preco05a ?>
                            <input type="hidden" name="preco05a" value="<?= $preco05a ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Total:
                        </th>
                        <th>
                            <?= $total ?>
                            <input type="hidden" name="total" value="<?= $total ?>">
                        </th>
                    </tr>
                </table>
            </div>
            <input class="botao01" type="submit" value="Salvar">
            <input class="botao01" type="button" onclick="window.print()" value="Imprimir">
            <a href="index.php">
                <input class="botao01" type="button" value="Cancelar">
            </a>
        </form>
        <div id="rodape">
            <div id="rodape01">
                Todos os direitos reservados.
            </div>
        </div>
    </div>
</body>

</html>