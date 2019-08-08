<?php
session_start();
include("conexao.php");
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuarios where email ='$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1 ){
    $_SESSION['email_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if($conexao ->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;

}
$conexao->close();
header('Location: cadastro.php');
exit;

?>