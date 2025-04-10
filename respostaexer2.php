<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body class="container py-5">
    <h2 class="mb-4">Médias dos alunos</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === 'POST' && isset($_POST['alunos'])) {
        $alunos = $_POST['alunos'];
        $medias = [];

        foreach ($alunos as $aluno) {
            $nome = $aluno['nome'];
            $nota1 = floatval($aluno['nota1']);
            $nota2 = floatval($aluno['nota2']);
            $nota3 = floatval($aluno['nota3']);

            $media = ($nota1 + $nota2 + $nota3) / 3;
            $medias[$nome] = $media;
        }

        arsort($medias); 
    ?>
    
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medias as $nome => $media) : ?>
                <tr>
                    <td><?= htmlspecialchars($nome) ?></td>
                    <td><?= number_format($media, 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <a href="exer2.php" class="btn btn-secondary mt-3">Voltar</a>

    <?php
    } else {
        echo '<div class="alert alert-danger mt-3">Nenhum aluno cadastrado.</div>';
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
