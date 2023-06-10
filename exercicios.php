<?php
// Define o nível de exibição de erros
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Verifica se o formulário foi submetido via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores enviados pelo formulário
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    
    // Chama a função para gravar os dados do aluno
    gravarAluno($cpf, $nome, $endereco, $telefone);
}

// Função para gravar os dados do aluno em um arquivo
function gravarAluno($cpf, $nome, $endereco, $telefone)
{
    // Cria um array com os dados do aluno
    $aluno = array(
        $cpf => array(
            'nome' => $nome,
            'endereco' => $endereco,
            'telefone' => $telefone
        )
    );
    $aluno_json = json_encode($aluno);

    $nomeArquivo = 'alunos.txt';
    
    file_put_contents($nomeArquivo, $aluno_json, FILE_APPEND);

    echo "Aluno gravado com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <style>
body {
 font-family: Arial, sans-serif;
 background: rgb(71,227,187);
background: linear-gradient(90deg, rgba(71,227,187,1) 0%, rgba(29,114,253,1) 26%, rgba(0,0,0,1) 100%);
}

form {
max-width: 400px;
margin: 0 auto;
padding: 20px;

border-radius: 5px;
}

label {
display: block;
 margin-bottom: 10px;
}
input[type="submit"]{
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

input[type="text"] {
 width: 100%;
 padding: 8px;
 margin-bottom: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

input[type="submit"] {
   
  background-color: #4CAF50;
  color: white;
  border: 2px solid #4CAF50;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

input[type="submit"]:hover {
  background-color: white; 
  color: black; 
}
    </style>
</head>

<body>
    <form method="POST" action="">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">

        <input type="submit" name="salvar" value="Salvar">
    </form>
</body>

</html>