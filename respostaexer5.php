<?php
$livros = $_POST['livros'];
$mapa = [];

foreach ($livros as $livro) {
    $titulo = trim($livro['titulo']);
    $quantidade = intval($livro['quantidade']);

    $mapa[$titulo] = $quantidade;
}
ksort($mapa);
?>

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
                <h2 class="mb-0">Lista de Livros</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Quantidade</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mapa as $titulo => $quantidade) : ?>
                            <tr>
                                <td><?= htmlspecialchars($titulo) ?></td>
                                <td><?= $quantidade ?></td>
                                <td>
                                    <?php if ($quantidade > 5) : ?>
                                        <span class="badge bg-success">Ok</span>
                                    <?php else : ?>
                                        <span class="badge bg-danger">Baixa quantidade</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="exer5.php" class="btn btn-secondary mt-3">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>