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
                <h2 class="mb-0">Cadastro de Produtos</h2>
            </div>
            <div class="card-body">
                <form method="post" action="respostaexer3.php">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <div class="row mb-4 border rounded p-3">
                            <h5>Produto <?= $i ?></h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="nome<?= $i ?>" class="form-label">Nome</label>
                                    <input type="text" id="nome<?= $i ?>" name="produtos[<?= $i ?>][nome]" class="form-control" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="preco<?= $i ?>" class="form-label">Preço</label>
                                    <input type="number" step="0.01" id="preco<?= $i ?>" name="produtos[<?= $i ?>][preco]" class="form-control" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="codigo<?= $i ?>" class="form-label">Código</label>
                                    <input type="text" id="codigo<?= $i ?>" name="produtos[<?= $i ?>][codigo]" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>