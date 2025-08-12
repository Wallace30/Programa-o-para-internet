<?php

class Contato
{
  public $nome;
  public $cpf;
  public $email;
  public $telefone;
  public $senha;
  public $cep;
  public $endereco;
  public $bairro;
  public $cidade;
  public $estado;

  function __construct($nome, $cpf, $email, $telefone, $senha, $cep, $endereco, $bairro, $cidade, $estado)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->email = $email;
    $this->telefone = $telefone;
    $this->senha = $senha;
    $this->cep = $cep;
    $this->endereco = $endereco;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
    $this->estado = $estado;
  }
}

function adicionaContato($nome, $cpf, $email, $telefone, $senha, $cep, $endereco, $bairro, $cidade, $estado)
{
  // Abre o arquivo de texto para escrita de conteúdo no final
  $arq = fopen("contatos.txt", "a");

  // Armazena os dados no formato textual, separando por ponto-e-vírgula
  fwrite($arq, "{$nome};{$cpf};{$email};{$telefone};{$senha};{$cep};{$endereco};{$bairro};{$cidade};{$estado}\n");

  // Fecha o arquivo de texto
  fclose($arq);
}

function carregaContatos()
{
  $arrayContatos = [];

  // Abre o arquivo para leitura
  $arq = fopen("contatos.txt", "r");
  if (!$arq)
    return $arrayContatos;

  // Lê linha por linha
  while (!feof($arq)) {
    $linha = trim(fgets($arq));

    if ($linha != "") {
      // Separa os dados usando ponto-e-vírgula como delimitador
      list($nome, $cpf, $email, $telefone, $senha, $cep, $endereco, $bairro, $cidade, $estado) =
        array_pad(explode(';', $linha), 10, null);

      // Cria um novo objeto Contato e adiciona no array
      $novoContato = new Contato($nome, $cpf, $email, $telefone, $senha, $cep, $endereco, $bairro, $cidade, $estado);
      $arrayContatos[] = $novoContato;
    }
  }

  // Fecha o arquivo
  fclose($arq);
  return $arrayContatos;
}
