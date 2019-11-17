<?php

require 'usuario_correto.php';

$usuario = new UsuarioCorreto;
$usuario->fill($_POST);

$usuario->imprimirDados();