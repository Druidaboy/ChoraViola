<?php

require("funcoes.php");

error_reporting(E_ALL ^ E_DEPRECATED);

$id = $_POST['id'];
$item01 = $_POST['item01'];
if ($item01 == "" || $item01 == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo ITEM deve ser preenchido');
				window.location.href='cad_descarte.php';</script>";
    die();
}
$item01a = $_POST['item01a'];
if ($item01a == "" || $item01a == null) {
    echo "<script language='javascript' type='text/javascript'>
				alert('O campo PREÇO deve ser preenchido');
				window.location.href='cad_descarte.php';</script>";
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

$sql = "(UPDATE chora_viola_precos SET item01 = '" . $item01 . "', item01a = '".$item01a."'
     WHERE id_precos = '".$id."')";
    if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript' type='text/javascript'>
				alert('Alterações Feitas');
				window.location.href='galeria.php';</script>";
    die();
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
