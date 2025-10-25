<?php
$conn = mysqli_connect("localhost", "root", "", "luz_e_Flor");

$email = $_POST['Email'];
$senha = $_POST['Senha'];

$sql = "INSERT INTO usuarios (Email, Senha) VALUES ('$email', '$senha')";
mysqli_query($conn, $sql);

print "logado com sucesso";

mysqli_close($conn);
?>

