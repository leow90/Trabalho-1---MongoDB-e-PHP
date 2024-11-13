<?php
// Conexão com o MongoDB
require_once 'mongo/mongo.php';

// Criação de instância da coleção
$collection = $db->estudantes;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $mae = $_POST['mae'];
    $pai = $_POST['pai'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];

    // Dados para inserir no MongoDB
    $estudante = [
        'nome' => $nome,
        'rg' => $rg,
        'cpf' => $cpf,
        'data_nascimento' => $data_nascimento,
        'telefone1' => $telefone1,
        'telefone2' => $telefone2,
        'mae' => $mae,
        'pai' => $pai,
        'endereco' => [
            'logradouro' => $logradouro,
            'numero' => $numero,
            'bairro' => $bairro,
            'cidade' => $cidade,
            'cep' => $cep
        ]
    ];

    // Inserir no MongoDB
    $collection->insertOne($estudante);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estudante</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

    <header>
        <h1>Cadastro de Estudante</h1>
    </header>

    <div class="container">
        <form method="POST" action="index.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Estudante</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <div class="mb-3">
                <label for="telefone1" class="form-label">Telefone 1</label>
                <input type="text" class="form-control" id="telefone1" name="telefone1" required>
            </div>
            <div class="mb-3">
                <label for="telefone2" class="form-label">Telefone 2</label>
                <input type="text" class="form-control" id="telefone2" name="telefone2" required>
            </div>
            <div class="mb-3">
                <label for="mae" class="form-label">Nome da Mãe</label>
                <input type="text" class="form-control" id="mae" name="mae" required>
            </div>
            <div class="mb-3">
                <label for="pai" class="form-label">Nome do Pai</label>
                <input type="text" class="form-control" id="pai" name="pai" required>
            </div>

            <h3>Endereço</h3>
            <div class="mb-3">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" required>
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</body>
</html>
