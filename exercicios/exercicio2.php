<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe GEral</title>

    <!-- CSS interno -->
    <style>
        .destaque {color: red}
        .paragráfo {color: green}
    </style>
</head>
<body>
    <h1 class="destaque">Entrega do primeiro trabalho do 2°semestre</h1>
    <p class="paragráfo">Programador: Bruno Querino</p>
    <hr>

    <?php
    // Geração de texto (string)
    echo "Chama Sesi-Senai !";

    /* Geração de texto estruturado (com tags, atributos) */
    echo "<h2>Testando o <span class='destaque'>HTML</span> através do PHP."; 
    echo "<h2>Funcionando o <span class=\"destaque\">HTML</span> através do PHP."; 
    echo "<h2>Eu faço<span class='destaque'>T.i</span> no Senai"; 
   
    ?>
    
    <h1>HTML e PHP mesclados</h1>
    <p class="paragráfo">Parágrafo HTML</p>

    <?php

    $linguagem = "Linguagem PHP.";
    ?>
    <p class="paragráfo">Parágrafo mesclando HTML com <?=$linguagem?></p>
    
</body>
</html>