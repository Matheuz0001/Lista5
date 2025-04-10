<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body class="container py-5">
    <h2 class="mb-4">Cadastro de Alunos</h2>
    <form method="post" action="respostaexer2.php">

        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <div class="row mb-4 border rounded p-3">
                <h5>Aluno <?= $i ?></h5>
                <div class="col-md-6 mb-3">
                    <label for="nome<?= $i ?>" class="form-label">Nome</label>
                    <input type="text" id="nome<?= $i ?>" name="alunos[<?= $i ?>][nome]" class="form-control" required>
                </div>
                <div class="col mb-2 mb-3">
                    <label for="nota1_<?= $i ?>" class="form-label">Nota 1</label>
                    <input type="number" step="0.01" id="nota1_<?= $i ?>" name="alunos[<?= $i ?>][nota1]" class="form-control" required>
                </div>
                <div class="col mb-2 mb-3">
                    <label for="nota2_<?= $i ?>" class="form-label">Nota 2</label>
                    <input type="number" step="0.01" id="nota2_<?= $i ?>" name="alunos[<?= $i ?>][nota2]" class="form-control" required>
                </div>
                <div class="col mb-2 mb-3">
                    <label for="nota3_<?= $i ?>" class="form-label">Nota 3</label>
                    <input type="number" step="0.01" id="nota3_<?= $i ?>" name="alunos[<?= $i ?>][nota3]" class="form-control" required>
                </div>
            </div>
        <?php endfor; ?>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
