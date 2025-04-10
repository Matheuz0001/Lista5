<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body class="bg-light container py-5">
    <h2 class="mb-4 text-center">Produtos com desconto</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === 'POST' && isset($_POST['produtos'])) {
        $produtos = $_POST['produtos'];
        $mapa = [];

        foreach ($produtos as $produtos) {
            $codigo = $produtos['codigo'] ?? 'sem código';
            $nome = $produtos['nome'] ?? 'sem nome';
            $preco = floatval($produtos['preco'] ?? 0);

            //desconto maior que 100 
            if ($preco > 100) {
                $preco *= 0.09;
            }

            $mapa[$codigo] = [
                'nome' => $nome,
                'preco' => $preco
            ];
        }

        // uasort ordena por nome 
        uasort($mapa, function ($a, $b) {
            return $a['nome'] < $b['nome'];
        });
    ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Preço (com desconto)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mapa as $codigo => $produto) : ?>
                    <tr>
                        <td><?= htmlspecialchars($codigo) ?></td>
                        <td><?= htmlspecialchars($produto['nome']) ?></td>
                        <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="exer2.php" class="btn btn-secondary mt-3">Voltar</a>
    <?php
    } else {
        echo '<div class="alert alert-danger mt-3">Nenhum produto cadastrado.</div>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>