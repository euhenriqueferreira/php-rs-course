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


        $projetos = [
            [
                "titulo" => "Meu Portfolio",
                'finalizado' => false,
                'data' => '2024-11-05',
                'descricao' => 'Meu primeiro portfolio. Escrito em PHP e HTML.',
            ],
            [
                "titulo" => "Lista de Tarefas",
                'finalizado' => true,
                'data' => '2024-05-10',
                'descricao' => 'Minha lista de tarefas.',
            ]
            // "Lista de Tarefas",
            // 'Controle de Leitura de Livros',
            // 'Sistema de Gerenciamento de Projetos'
        ];
    ?>

    <h1>
        <?php echo $titulo; ?>
    </h1>

    <!-- Sintaxe Curta de Echo -->
    <p><?=$subtitulo;?></p>
    <p><?=$ano?></p>


    <hr>

    <ul>
        <?php foreach ($projetos as $projeto):?>
            <div 
                <?php if((2024 - $ano) > 2): ?>
                    style="background-color:darkseagreen;"
                <?php endif;?>

            >
                <h2><?=$projeto['titulo']?></h2>
                <p><?=$projeto['descricao']?></p>

                <div>
                    <div class=""><?=$projeto['data']?></div>
                    <div> Projeto:
                        <?php if(!$projeto['finalizado']): ?> 
                            <span style="color: red; font-size: 18px">Não finalizado ⛔</span>
                        <?php else:?>
                            <span style="color: green; font-size: 18px;">Finalizado ✅</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>



    
</body>
</html>