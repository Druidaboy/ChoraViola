<?php

require("funcoes.php");

error_reporting(E_ALL ^ E_DEPRECATED);

$data = $_POST['data'];
$data = dataBrBanco($data);
$hora = $_POST['hora'];
$total = $_POST['total'];
if ($total == "" || $total == 0) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O seu pedido está sem itens');
				window.location.href='index.php';</script>";
    die();
}
$produto01 = $_POST['produto01'];
    if($produto01 == ""){
    $produto01 = 0;
    }
$item01 = $_POST['item01'];
if ($item01 == "") {
    $item01 = 0;
}
$preco01a = $_POST['preco01a'];
$produto02 = $_POST['produto02'];
if ($produto02 == "") {
    $produto02 = 0;
}
$item02 = $_POST['item02'];
if ($item02 == "") {
    $item02 = 0;
}
$preco02a = $_POST['preco02a'];
$produto03 = $_POST['produto03'];
if ($produto03 == "") {
    $produto03 = 0;
}
$item03 = $_POST['item03'];
if ($item03 == "") {
    $item03 = 0;
}
$preco03a = $_POST['preco03a'];
$produto04 = $_POST['produto04'];
if ($produto04 == "") {
    $produto04 = 0;
}
$item04 = $_POST['item04'];
if ($item04 == "") {
    $item04 = 0;
}
$preco04a = $_POST['preco04a'];
$produto05 = $_POST['produto05'];
if ($produto05 == "") {
    $produto05 = 0;
}
$item05 = $_POST['item05'];
if ($item05 == "") {
    $item05 = 0;
}
$preco05a = $_POST['preco05a'];

//conexão com BD

$servername = "localhost";
$username = "root";
$password = "";
$database = "Chora_Viola";

$conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
$sql = "INSERT INTO chora_viola_pedidos (dia, hora, produto01, produto02, 
        produto03, produto04, produto05, item01, item02, item03, item04, item05, preco01a, preco02a, preco03a, 
        preco04a, preco05a, total) VALUES ('{$data}', '{$hora}', '{$produto01}', '{$produto02}', 
        '{$produto03}', '{$produto04}', '{$produto05}', '{$item01}', '{$item02}', '{$item03}', '{$item04}', 
        '{$item05}', '{$preco01a}', '{$preco02a}', '{$preco03a}', '{$preco04a}', '{$preco05a}', '{$total}')";
    if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript' type='text/javascript'>
				alert('Pedido salvo');
				window.location.href='index.php';</script>";
    die();
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>