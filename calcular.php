<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    // Cálculo da média
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

   
    if ($media >= 9) {
        $conceito = 'A';
        $mensagem = "Aprovado com Louvor";
    } elseif ($media >= 7) {
        $conceito = 'B';
        $mensagem = "Aluno Aprovado";
    } elseif ($media >= 4) {
        $conceito = 'C';
        $mensagem = "Recuperação, sua chance de passar";
    } else {
        $conceito = 'D';
        $mensagem = "Poxa vida, vamos tentar novamente ano que vem";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Resultado</h2>
        <p class="text-center">Média: <strong><?php echo number_format($media, 1); ?></strong></p>
        <p class="text-center">Conceito: <strong><?php echo $conceito; ?></strong></p>
        <p class="text-center">Mensagem: <strong><?php echo $mensagem; ?></strong></p>

       
        <?php if ($conceito == 'C'): ?>
        <div class="mt-4">
            <h4 class="text-center">Recuperação</h4>
            <form method="POST" action="verifica_recuperacao.php">
                <input type="hidden" name="media_bimestral" value="<?php echo $media; ?>">
                <div class="row mb-3">
                    <div class="col-md-6 offset-md-3">
                        <label for="nota_recuperacao" class="form-label">Nota da Recuperação:</label>
                        <input type="number" step="0.1" min="0" max="10" class="form-control" id="nota_recuperacao" name="nota_recuperacao" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Verificar Aprovação</button>
                </div>
            </form>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
