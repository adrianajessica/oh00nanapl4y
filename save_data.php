<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Dados a serem escritos no arquivo de texto
$data = "Nome de Usuário: $username\nE-mail: $email\nSenha: $password\n\n";

// Caminho do arquivo de texto
$file = 'cadastros.txt';

// Escreve os dados no arquivo de texto (append)
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
?>
