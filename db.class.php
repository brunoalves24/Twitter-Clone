<?php 

  class db
  {
    //Host
    private $host = 'localhost';

    //Usuario
    private $usuario = 'root';

    //Senha
    private $senha = 'root';

    //Banco de dados
    private $db = 'twitter_clone';


    public function connect_mysql(){
      //Criando conexão com o banco.
      $conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->db);

      //Ajustar charset de comunicação entre a aplicação e o banco de dados.
      mysqli_set_charset($conn, 'utf8');

      //Verificar se houve erro de conexão.
      if(mysqli_connect_errno()){
        echo 'Erro ao tentar conexão com banco de dados mysql: ' .mysqli_connect_error();
      }

      return $conn;  
    }
    
  }
  



?>