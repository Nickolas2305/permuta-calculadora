<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $media_bimestral = (float)$_POST['media_bimestral'];
    $nota_recuperacao = (float)$_POST['nota_recuperacao'];

  
    $media_final = $media_bimestral + $nota_recuperacao;

    
    if ($media_final >= 10) {
        $mensagem_final = "Parabéns! Você foi aprovado após a recuperação.";
    } else {
        $mensagem_final = "Infelizmente, você não atingiu a nota necessária e foi reprovado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Recuperação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Resultado da Recuperação</h2>
        <p class="text-center"><strong><?php echo $mensagem_final; ?></strong></p>
    </div>
</body>
</html>
