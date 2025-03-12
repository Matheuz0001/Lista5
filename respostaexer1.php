<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5 - Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="mb-0">Lista de Contatos</h2>
            </div>
            <div class="card-body">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $contatos = [];
                    $nomes = $_POST["nome"] ?? [];
                    $telefones = $_POST["fone"] ?? [];

                    $erros = [];

                    for ($i = 0; $i < count($nomes); $i++) {
                        $nome = trim($nomes[$i]);
                        $telefone = trim($telefones[$i]);

                        if (isset($contatos[$nome])) {  
                            $erros[] = "Erro: O nome <strong>$nome</strong> já foi cadastrado.";
                            continue;
                        }
                        if (in_array($telefone, $contatos)) {
                            $erros[] = "Erro: O telefone <strong>$telefone</strong> já foi cadastrado.";
                            continue;
                        }

                        $contatos[$nome] = $telefone;
                    }

                    ksort($contatos);

                    if (!empty($erros)) {
                        echo '<div class="alert alert-danger">';
                        foreach ($erros as $erro) {
                            echo "<p class='mb-0'>$erro</p>";
                        }
                        echo '</div>';
                    }

                    if (!empty($contatos)) {
                        echo '<ul class="list-group">';
                        foreach ($contatos as $nome => $telefone) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                            echo "<strong>$nome</strong> <span class='text-muted'>$telefone</span>";
                            echo '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo '<p class="text-center text-muted">Nenhum contato cadastrado.</p>';
                    }
                }
                ?>
            </div>
            <div class="card-footer text-center">
                <a href="exer1.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </div>
</body>
</html>
