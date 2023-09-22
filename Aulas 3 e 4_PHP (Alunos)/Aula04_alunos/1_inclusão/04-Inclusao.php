<!-- Fazendo a inclusão de um arquivo de programação -->

<!-- 1ª Digitação (Aqui) -->
<?php include "recursos.php";?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Link CSS -->
        <link rel="stylesheet" href="../style.css">
        <title>Inclusão de recursos (Include)</title>

    </head>
    
    <body class="container">
        <h1 class="destaqueP">Inclusão de recursos (Include)</h1>
        <hr>

        <!-- Recuperando o conteúdo da string Escola (que é Senai) definido em "recursos.php" -->

        <!-- 2ª Digitação (Aqui) -->
        <h2 class="destaque"><?=ESCOLA?></h2>

        <!-- Recuperando o conteúdo da variável $curso definida em "recursos.php" -->

        <!-- 3ª Digitação (Aqui) -->
        <p>Estamos fazendo o curso de <?=$curso?></p>
        <!-- Recuperando o conteúdo do array $tecnologia definido em "recursos.php" e criando uma lista com foreach -->
        <ul>
            <?php foreach($tecnologias as $tecnologia) { ?>
                <li> <?=$tecnologia?></li>

        <?php  } ?>
        </ul>


        <!-- Chamando a função VerificaIdade criara em "recursos.php" para retornar se é maior ou menor -->
        
        <!-- 4ª Digitação (Aqui) -->
        <p>aluno Chapolin Cololrado tem 25 anos e é: <?=VerificaIdade(25)?> de idade</p>
        <hr>

        <!-- Recupera o conteudo do arquivo externo "textos.php" -->
        <article>
            <h2 class="destaque">Conteúdo adicional</h2>
            <!-- No caso de erros o required para tudo e o include não -->
            
            <!-- 5ª Digitação (Aqui) -->
            <?php 
                include "textos .php"; 
            
            ?>        
        </article>
        
    </body>
</html>