<?php

$conexao = new mysqli('localhost:8080' , 'root', '', 'netfliz');

if($conexao->connect_errno) // connect_errno = diagnosticar erros de conexão/servidor
{
    echo 'tem alguma coisa errada';
}
else {
    echo 'conexão bem sucedida';
}