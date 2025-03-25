<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="mb-0">Nota alunos</h2>
            </div>
            <div class="card-body">
                <form method="post" action="respostaexer2.php" id="formNotas">
                    <div id="notas">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <div class="row contato mb-3 align-items-end">
                                <div class="col-md-6">
                                    <label for="nome<?= $i ?>" class="form-label">Nome</label>
                                    <input type="text" id="nome<?= $i ?>" name="nome[]" class="form-control" required placeholder="Digite o nome do aluno">
                                </div>
                                <div class="col-md-5">
                                    <label for="nota<?= $i ?>" class="form-label">Nota</label>
                                    <input type="number" id="nota<?= $i ?>" name="nota[]" class="form-control nota" required placeholder="Digite a nota do aluno">
                                </div>
                                <div class="col-md-1 text-end">
                                    <button type="button" class="btn btn-danger remover">X</button>
                                </div>
                            </div>
                        <?php endfor; ?>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 d-flex justify-content-between">
                            <button type="button" id="adicionar" class="btn btn-success">
                                <i class="bi bi-plus-lg"></i> Adicionar nota
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-send"></i> Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>