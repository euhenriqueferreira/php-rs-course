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
        $ano = 2021;
        $projeto = 'Meu portfolio';
        $finalizado = true;
        $dataprojeto = "2024-11-05";
        $descricao = 'Meu primeiro portfolio. Escrito em PHP e HTML.';


        $projetos = [];
    ?>

    <h1>
        <?php echo $titulo; ?>
    </h1>

    <!-- Sintaxe Curta de Echo -->
    <p><?=$subtitulo;?></p>
    <p><?=$ano?></p>


    <hr>

    <div class="">
        <h2><?=$projeto?></h2>
        <p><?=$descricao?></p>

        <div
            <?php if((2024 - $ano) > 2): ?>
                style="background-color:cadetblue;"
            <?php endif;?>
        >
            <div class=""><?=$dataprojeto?></div>
            <div> Projeto:
                <?php
                    if( $finalizado ){
                        echo ' Finalizado ✅';
                    } else{
                        echo ' Não finalizado ⛔';
                    }
                ?>

                <?php if(!$finalizado): ?> 
                    <span style="color: red; font-size: 18px">Não finalizado ⛔</span>
                <?php else:?>
                    <span style="color: green; font-size: 18px;">Finalizado ✅</span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>