<?php
include('conexao.php');
$email = $_SESSION['email'];
$consulta = mysqli_query($conexao, "SELECT id, nome, tipo FROM  usuarios WHERE email = '$email'");
$usuario = mysqli_fetch_array($consulta);
?>