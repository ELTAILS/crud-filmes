<?php 
    //Banco de dados
    $database = [
        [
            "titulo" => "Sonic 3: O Filme",
            "descricao" => " Com o retorno de Sonic, Tails e Knuckles, o filme adapta elementos de Sonic Adventure 2, incluindo a aliança com Dr. Robotnik (Jim Carrey) para enfrentar o ouriço sombrio.",
            "img" => "https://upload.wikimedia.org/wikipedia/pt/8/89/Sonic_The_Hedgehog_3_p%C3%B4ster.png"
        ],
        [
            "titulo" => "Vingadores: Ultimato",
            "descricao" => "Com a ajuda da Capitã Marvel e Homem-Formiga, a equipe remanescente embarca em uma missão de viagem no tempo perigosa para recuperar as Joias do Infinito e restaurar a ordem, enfrentando sacrifícios supremos.",
            "img" => "https://br.web.img3.acsta.net/pictures/19/04/26/17/30/2428965.jpg"
        ],
        [
            "titulo" => "Até o Último Homem",
            "descricao" => "Acompanhe a história de Desmond T. Doss, um médico do exército americano que, durante a Segunda Guerra Mundial, se recusa a pegar em armas. Durante a Batalha de Okinawa ele trabalha na ala médica e salva cerca de 75 homens.",
            "img" => "https://br.web.img3.acsta.net/pictures/16/11/21/15/29/457312.jpg"
        ],
        [
            "titulo" => "Interstellar",
            "descricao" => "nterstellar (2014) é um filme de ficção científica dirigido por Christopher Nolan, conhecido por combinar especulação científica com narrativa emocional. ",
            "img" => "data:image/jpeg;base64,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"
        ],
        [
            "titulo" => "Hamilton",
            "descricao" => "legal",
            "img" => "https://www.blumenthalarts.org/assets/img/Hamilton_1440_NEW_OPTIM-5fde140f8f.jpg"
        ]
        
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trabalho de git">
    <!--Link boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>SpoilerFree</title>
    <!--CSS-->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        header, footer {
            background-color: #fff;
        }

        .cardPai {
            display: grid;
            grid-template-columns: 33% 33% 33%;
        }

        .cardPai h5 {
            text-align: center;
        }

        .cardPai p{
            text-align: justify;
            overflow: hidden;
        }

        .cardPai a {
            width: 80%;
        }

        .cardPai .card {
            transition: ease-in-out 0.4s;
        }

        .cardPai .card:hover {
            transform: translateY(-10px);
        }

    </style>
</head>
<body>
    <!--Header-->
    <header class="text-center mb-4">
        <h1 class="h1">SpoilerFree</h1><hr>
    </header>
    <!--Conteudo-->
    <main class="container text-center">
        <h1 class="h1 mb-4">Novidades que chegaram pra você</h1>
        <!--Loop do array "$database"-->
        <div class="cardPai justify-content-center">
            <?php foreach($database as $dados): ?>
                <!--Corpo do card-->
                <div class="card" style="width: 18rem;">
                    <!--imagem do filme-->
                    <img src="<?= $dados['img'] ?>" class="card-img-top" alt="imagen do <?= $dados['titulo'] ?>">
                    <div class="card-body">
                        <!--Titulo do filme-->
                        <h5 class="card-title"><strong><?= $dados['titulo'] ?></strong></h5>
                        <!--Descrição do filme-->
                        <p class="card-text"><?= $dados['descricao'] ?></p>
                        <!--Link do filme-->
                        <a href="#" class="btn btn-primary">Assistir agora</a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </main>
    <!--Script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!--Footer-->
    <footer class="text-center mt-4">
        <hr><p>&reg; Todos os direitos reservados</p>
    </footer>
</body>
</html>