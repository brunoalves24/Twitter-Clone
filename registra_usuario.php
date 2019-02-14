<?php 
  require_once('db.class.php');

  $objdb = new db();
  $link = $objdb->connect_mysql();

  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['senha'] ;

  $sql = "INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario','$email','$senha')";

  if(mysqli_query($link, $sql)){
    echo 'Usuário registrado com sucesso';
  } else {
    echo 'Erro ao cadastrar o usuário';
  }
?>