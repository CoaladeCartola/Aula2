<?php
//coletando dados do formulario
$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Ananimo';
$email = $_POST['email'] ?? 'Nao informado'; //Null coalescing operator
$idade = $_POST['idade'] ?? 'Nao informado';

//armazenando dados em um array associativo
$usuario = [
    'nome' => $nome,
    'email' => $email,
    'idade' => $idade
];

//funcao para saudacao
function saudacao($nome) {
    return "Ola $nome, seja bem-vindo";
}

// ecibindo uma mensagem  de boas-vindas
echo saudacao($usuario['nome']). "<br>";
echo "Aqui estao os detalhes do seu cadastro:<br>";
echo "Nome: " . $usuario['nome'] . "<br>";
echo "Email: " . $usuario['email'] . "<br>";
echo "Idade: " . $usuario['idade'] . "<br>";

?>