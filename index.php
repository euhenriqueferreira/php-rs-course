<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
</head>
<body>
    <?php
        // Variáveis
        $nome = 'Henrique';
        $saudacao = 'Oi';
        $titulo = $saudacao.', '.$nome;
        $subtitulo = "Seja Bem Vindo ao meu portfólio";
        $ano = 2021;
        $projeto = 'Meu portfolio';
        $finalizado = true;
        $dataprojeto = "2024-11-05";
        $descricao = 'Meu primeiro portfolio. Escrito em PHP e HTML.';

        // Arrays são variáveis de que armazenam múltiplos valores
        $projetos = [
            [
                "titulo" => "Meu Portfolio",
                'finalizado' => false,
                'ano' => 2024,
                'descricao' => 'Meu primeiro portfolio. Escrito em PHP e HTML.',
            ],
            [
                "titulo" => "Lista de Tarefas",
                'finalizado' => true,
                'ano' => 2023,
                'descricao' => 'Minha lista de tarefas.',
            ],
            [
                "titulo" => "Controle de Leitura de Livros",
                'finalizado' => true,
                'ano' => 2024,
                'descricao' => 'Minha lista de livros.',
            ],
            [
                "titulo" => "Projeto secreto",
                'finalizado' => false,
                'ano' => 2022,
                'descricao' => 'Projeto secreto em andamento.',
                'stack'=>['PHP','HTML','CSS','JS'],
            ],
            // "Lista de Tarefas",
            // 'Controle de Leitura de Livros',
            // 'Sistema de Gerenciamento de Projetos'
        ];


        $livros = [
            ['nome' => 'Senhor dos Anéis'],
            ['nome' => 'Harry Potter'],
            ['nome' => 'Os Segredos da Mente Milionária'],
        ];

        // Funções organizam os blocos de código que devem realizar alguma "coisa";
        function verificarSeEstaFinalizado( $projeto ){
            // Opção 1: if e else
            // if($projeto['finalizado']){ 
            //     return '<span style="color: green; font-size: 18px;">Finalizado ✅</span>';
            // }else{
            //     return '<span style="color: red; font-size: 18px">Não finalizado ⛔</span>';
            // }

            // Opção 2: usando o return, não precisamos do else, pois quando o return é executado, o restante do código dentro do escopo da função não é lido.
            if($projeto['finalizado']){ 
                return '<span style="color: green; font-size: 18px;">Finalizado ✅</span>';
            }

            return '<span style="color: red; font-size: 18px">Não finalizado ⛔</span>';
        }

        // Filtro de Projetos por Data
        // $filtrarPorData = function( $listaDeProjetos, $dataFiltro = null){
        //     if(is_null($dataFiltro)){
        //         return $listaDeProjetos;
        //     }

        //     $filtradosPorData = [];

        //     foreach ($listaDeProjetos as $projeto) {
        //         if(! is_null($dataFiltro) && $projeto['data'] === $dataFiltro){
        //             $filtradosPorData [] = $projeto;
        //         }   
        //     }

        //     return $filtradosPorData;
        // };

        // Filtro de Projetos finalizados (ou não finalizados)
        // function filtrarProjetos( $listaDeProjetos, $finalizado = null ){
        //     if(is_null($finalizado)){
        //         return $listaDeProjetos;
        //     }
            
        //     $filtrados = [];

        //     foreach($listaDeProjetos as $projeto){
        //         if($projeto['finalizado'] === $finalizado){
        //             $filtrados[] = $projeto;
        //         }
        //     }

        //     return $filtrados;
        // }

        // Função Genérica para Filtrar Arrays
        // function filtro( $itens, $funcao ){    
        //     $filtrados = [];

        //     foreach($itens as $item){
        //         if($funcao($item)){
        //             $filtrados[] = $item;
        //         }
        //     }

        //     return $filtrados;
        // }

        // $projetosFiltrados = filtro($projetos, function($projeto){
        //     return $projeto['ano'] == 2024 || $projeto['ano'] == 2022;
        // });
        $projetosFiltrados = array_filter($projetos, function($projeto){
            return $projeto['ano'] <= 2024;
        })
        // $projetosFiltradosPorAno = filtrarPorAno($projetosFiltrados, 2024);
    ?>

    <h1>
        <?php echo $titulo; ?>
    </h1>

    <!-- Sintaxe Curta de Echo -->
    <p><?=$subtitulo;?></p>
    <p><?=$ano?></p>

    <hr>

    <ul>
        <?php foreach ($projetosFiltrados as $projeto):?>
            <div 
                <?php if((2024 - $ano) > 2): ?>
                    style="background-color:darkseagreen;"
                <?php endif;?>

            >
                <h2><?=$projeto['titulo']?></h2>
                <p><?=$projeto['descricao']?></p>

                <div>
                    <div class=""><?=$projeto['ano']?></div>
                    <div> Projeto:
                        <?=verificarSeEstaFinalizado($projeto);?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>



    
</body>
</html>