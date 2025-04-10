<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2>Cadastro de Itens</h2>
            </div>
            <div class="card-body">
                <form method="post" action="respostaexer4.php">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <div class="border p-3 rounded mb-4">
                            <h5 class="mb-3">Item <?= $i ?></h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nome<?= $i ?>" class="form-label">Nome</label>
                                    <input type="text" id="nome<?= $i ?>" name="itens[<?= $i ?>][nome]" class="form-control" placeholder="Ex: Camiseta" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="preco<?= $i ?>" class="form-label">Preço</label>
                                    <input type="number" step="0.01" id="preco<?= $i ?>" name="itens[<?= $i ?>][preco]" class="form-control" placeholder="Ex: 49.90" required>
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
</body>

</html>
