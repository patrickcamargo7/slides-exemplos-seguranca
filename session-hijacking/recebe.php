<?php 

session_start();

$_SESSION['usuario'] = $_POST;

var_dump($_SESSION);