<?php

class UsuarioCorreto{
  private $nome;
  private $email;
  private $cpf;
  private $senha;

  private $fillable = ['nome', 'cpf', 'email'];

  function fill($data) {  
    foreach ($this->fillable as $fill) {
        $this->{$fill} = $data[$fill];
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