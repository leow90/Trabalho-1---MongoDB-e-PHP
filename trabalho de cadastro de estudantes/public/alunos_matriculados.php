<?php
// Conexão com o MongoDB
require_once 'mongo/mongo.php';

// Criação de instância da coleção
$collection = $db->estudantes;

// Buscar todos os estudantes
$estudantes = $collection->find();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos Matriculados</title>
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

    <header>
        <h1>Lista de Alunos Matriculados</h1>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Nome da Mãe</th>
                    <th>Nome do Pai</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudantes as $estudante): ?>
                    <tr>
                        <td><?= $estudante['nome'] ?></td>
                        <td><?= $estudante['rg'] ?></td>
                        <td><?= $estudante['cpf'] ?></td>
                        <td><?= $estudante['data_nascimento'] ?></td>
                        <td><?= $estudante['telefone1'] ?></td>
                        <td><?= $estudante['mae'] ?></td>
                        <td><?= $estudante['pai'] ?></td>
                        <td>
                            <!-- Ações para editar ou excluir -->
                            <a href="editar_estudante.php?id=<?= $estudante['_id'] ?>">Editar</a> |
                            <a href="excluir_estudante.php?id=<?= $estudante['_id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
