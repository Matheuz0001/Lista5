<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="mb-0">Cadastro de Livros</h2>
            </div>
            <div class="card-body">
                <form method="post" action="respostaexer5.php">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <div class="border p-3  rounded mb-4">
                            <h5 class="mb-3">Livro <?= $i ?></h5>
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="titulo<?= $i ?>" class="form-label">Título</label>
                                    <input type="text" id="titulo<?= $i ?>" name="livros[<?= $i ?>][titulo]" class="form-control" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="quantidade<?= $i ?>" class="form-label">Quantidade</label>
                                    <input type="number" id="quantidade<?= $i ?>" name="livros[<?= $i ?>][quantidade]" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-5">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>