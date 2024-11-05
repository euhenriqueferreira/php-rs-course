<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
</head>
<body>
    <?php
        $nome = 'Henrique';
        $saudacao = 'Oi';
        $titulo = $saudacao.', '.$nome;
        $subtitulo = "Seja Bem Vindo ao meu portfólio";
        $ano = 2024;
    ?>

    <h1>
        <?php echo $titulo; ?>
    </h1>

    <!-- Sintaxe Curta de Echo -->
    <p><?=$subtitulo;?></p>
    <p><?=$ano?></p>
</body>
</html>