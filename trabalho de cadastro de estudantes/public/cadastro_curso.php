<?php
include 'mongo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_curso = $_POST['nome_curso'];
    $descricao = $_POST['descricao'];
    $carga_horaria = $_POST['carga_horaria'];
    $data_inicio = $_POST['data_inicio'];

    // Inserir dados na coleção 'cursos'
    $curso = [
        'nome_curso' => $nome_curso,
        'descricao' => $descricao,
        'carga_horaria' => $carga_horaria,
        'data_inicio' => $data_inicio,
        'estudantes_matriculados' => [] // Inicialmente vazio
    ];

    $db->cursos->insertOne($curso);

    echo "Curso cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h2 class="mt-5">Cadastro de Curso</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome_curso" class="form-label">Nome do Curso</label>
            <input type="text" class="form-control" id="nome_curso" name="nome_curso" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="carga_horaria" class="form-label">Carga Horária</label>
            <input type="text" class="form-control" id="carga_horaria" name="carga_horaria" required>
        </div>
        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de Início</label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

</body>
</html>
