<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h2>Intens com Imposto 15%</h2>
            </div>
            <div class="card-body">
                <?php
                if ($_SERVER["REQUEST_METHOD"] === 'POST' && isset($_POST['itens'])) {
                    $itens = $_POST['itens'];
                    $mapa = [];

                    foreach ($itens as $itens) {
                        $nome = $itens['nome'] ?? 'sem nome';
                        $preco = floatval($itens['preco'] ?? 0);
                        $precoComImposto = $preco * 1.15;

                        $mapa[$nome] = $precoComImposto;
                    }

                    asort($mapa); 
                ?>
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Preço com Imposto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mapa as $nome => $preco) : ?>
                            <tr>
                                <td><?= htmlspecialchars($nome) ?></td>
                                <td>R$ <?= number_format($preco, 2, ',', ',') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?php
                } else {
                    echo '<div class="alert alert-danger mt-3">Nenhum item cadastrado.</div>';
                }
                ?>
                <a href="exer4.php" class="btn btn-secondary mt-3">Voltar</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>