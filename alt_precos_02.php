<?php

require("funcoes.php");

error_reporting(E_ALL ^ E_DEPRECATED);

$id = $_POST['id'];
$item01 = $_POST['item01'];
if ($item01 == "" || $item01 == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo ITEM deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item01a = $_POST['item01a'];
if ($item01a == "" || $item01a == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo PREÇO deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item02 = $_POST['item02'];
if ($item02 == "" || $item02 == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo ITEM deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item02a = $_POST['item02a'];
if ($item02a == "" || $item02a == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo PREÇO deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item03 = $_POST['item03'];
if ($item03 == "" || $item03 == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo ITEM deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item03a = $_POST['item03a'];
if ($item03a == "" || $item03a == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo PREÇO deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item04 = $_POST['item04'];
if ($item04 == "" || $item04 == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo ITEM deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item04a = $_POST['item04a'];
if ($item04a == "" || $item04a == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo PREÇO deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item05 = $_POST['item05'];
if ($item05 == "" || $item05 == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo ITEM deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}
$item05a = $_POST['item05a'];
if ($item05a == "" || $item05a == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo PREÇO deve ser preenchido');
				window.location.href='galeria.php';</script>";
    die();
}

echo $item01a;




//conexão com BD

$servername = "localhost";
$username = "root";
$password = "";
$database = "Chora_Viola";

$conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

$sql = "UPDATE chora_viola_precos SET item01 = '" . $item01 . "', item01a = '".$item01a."',
     item02 = '" . $item02 . "', item02a = '" . $item02a . "', item03 = '" . $item03 . "',
      item03a = '" . $item03a . "', item04 = '" . $item04 . "', item04a = '" . $item04a . "', 
      item05 = '" . $item05 . "', item05a = '" . $item05a . "' WHERE id_precos = '".$id."'";
    if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript' type='text/javascript'>
				alert('Alterações Feitas');
				window.location.href='galeria.php';</script>";
    die();
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
