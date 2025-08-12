<?php
require "contatos.php";

// coleta os dados do formulário
$nome     = $_POST["nome"]     ?? "";
$cpf      = $_POST["cpf"]      ?? "";
$email    = $_POST["email"]    ?? "";
$telefone = $_POST["telefone"] ?? "";
$senha    = $_POST["senha"]    ?? "";
$cep      = $_POST["cep"]      ?? "";
$endereco = $_POST["endereco"] ?? "";
$bairro   = $_POST["bairro"]   ?? "";
$cidade   = $_POST["cidade"]   ?? "";
$estado   = $_POST["estado"]   ?? "";

// cria um novo contato e acrescenta no arquivo de texto
adicionaContato($nome, $cpf, $email, $telefone, $senha, $cep, $endereco, $bairro, $cidade, $estado);

// redireciona o navegador para a página de listagem de contatos
header("Location: listaContatos.php");
exit;
?>
