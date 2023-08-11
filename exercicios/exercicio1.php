<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe GEral</title>

    <!-- CSS interno -->
    <style>
        .destaque {color: red};
    </style>
</head>
<body>
    <h1 class="destaque">Trabalho com php</h1>
    <p>Programador: Bruno Querino</p>
    <hr>

    <?php
    // Geração de texto (string)
    echo "Chama Sesi-Senai !";

    /* Geração de texto estruturado (com tags, atributos) */
    echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP."; 
    echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP."; 
    ?>
    
    <h1>HTML e PHP mescladoas</h1>
    <p>Parágrafo HTML</p>

    <?php

    $linguagem = "Linguagem PHP.";
    ?>
    <p>Parágrafo mesclando HTML com <?=$linguagem?></p>
    
</body>
</html>