<?php

use Src\Dominio\Aluno\Aluno;
use Src\Infra\Aluno\RepositoryAlunoMemory;

require 'vendor/autoload.php';

$cpf = $argv[1];
$nome = $argv[2];
$email = $argv[3];
$ddd = $argv[4];
$numero = $argv[5];

$aluno = Aluno::comCpfNomeEEmail($cpf, $nome, $email)->adicionarTelefone($ddd, $numero);
$reporitorio = new RepositoryAlunoMemory;
$reporitorio->adicionar($aluno);