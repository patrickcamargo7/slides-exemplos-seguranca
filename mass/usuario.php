<?php 

class Usuario{

  private $nome;
  private $email;
  private $cpf;
  private $senha;

  function fill($data) {  
    foreach ($data as $chave => $valor) {
        $this->{$chave} = $valor;
    }
  }

  function imprimirDados() {
    echo sprintf(
      'nome: %s<br> email: %s<br>cpf: %s<br>Senha: %s', 
      $this->nome, 
      $this->email, 
      $this->cpf,
      $this->senha
    );
  }
  
}
