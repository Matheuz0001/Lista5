<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5 - Cadastro de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="mb-0">Cadastro de Contatos</h2>
            </div>
            <div class="card-body">
                <form method="post" action="respostaexer1.php" id="formContatos">
                    <div id="contatos">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <div class="row contato mb-3 align-items-end">
                                <div class="col-md-6">
                                    <label for="nome<?= $i ?>" class="form-label">Nome</label>
                                    <input type="text" id="nome<?= $i ?>" name="nome[]" class="form-control" required placeholder="Digite o nome">
                                </div>
                                <div class="col-md-5">
                                    <label for="fone<?= $i ?>" class="form-label">Telefone</label>
                                    <input type="tel" id="fone<?= $i ?>" name="fone[]" class="form-control telefone" required placeholder="(99) 99999-9999">
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
                                <i class="bi bi-plus-lg"></i> Adicionar Contato
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

    <script>
        $(document).ready(function() {
            let count = 6;

            // Adicionar novo contato
            $("#adicionar").click(function() {
                $("#contatos").append(`
                    <div class="row contato mb-3 align-items-end">
                        <div class="col-md-6">
                            <label for="nome${count}" class="form-label">Nome</label>
                            <input type="text" id="nome${count}" name="nome[]" class="form-control" required placeholder="Digite o nome">
                        </div>
                        <div class="col-md-5">
                            <label for="fone${count}" class="form-label">Telefone</label>
                            <input type="tel" id="fone${count}" name="fone[]" class="form-control telefone" required placeholder="(99) 99999-9999">
                        </div>
                        <div class="col-md-1 text-end">
                            <button type="button" class="btn btn-danger remover">X</button>
                        </div>
                    </div>
                `);
                count++;
            });

            // Remover contato
            $(document).on("click", ".remover", function() {
                $(this).closest(".contato").remove();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
