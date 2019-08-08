<?php
 session_start();
include('dadosusuario.php');

$assunto = $_POST['assunto'];
$descricao = $_POST['descricao'];
$idusuario = $usuario['id'];






$query = "INSERT INTO chamado (usuario_id, assunto , descricao, data) VALUES('$idusuario', '$assunto', '$descricao', CURDATE())";
$res= mysqli_query($conexao, $query);

if($res){
  echo "Dados inseridos com sucesso";
}else{
  echo "Falha ao tentar inserir dados: " . mysqli_error($conexao);
}
?>