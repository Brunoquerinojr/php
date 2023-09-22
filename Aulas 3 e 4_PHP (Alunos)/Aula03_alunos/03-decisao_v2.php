<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Condicionais PHP</title>
</head>
<body>
    <h1 class="destaqueP">Estruturas de Controle Condicional</h1>
    <hr>
<!-- ___________________________________________________________________ -->
    <h2 class="destaque">SE Simples</h2>


<!-- 1ª Digitação (Aqui) -->
    <?php
    $a = 70;
    if ($a > 1) {
        echo 'True $a é maior que 1. <br>';
    }
    
    
    ?>

<hr>
<!-- ___________________________________________________________________ -->
    <h2 class="destaque">SE Composta</h2>

<?php
    $produto = "Iphone 15 Pro Max";
    $qtdEmEstoque = 0; 
    $qtdCritica = 14; 
?>

    <h3><?=$produto?></h3>


<!-- 2ª Digitação (Aqui) -->
<?php
 if ($qtdEmEstoque < $qtdCritica) {
    echo "<h3>$produto</h3>";
    echo "<span class=repor>É necessário repor </span>";
    echo "<br>";
    echo "<mark>URGENTE</mark>";
} else {
    echo "<h3>$produto</h3>";
    echo "<span class=ok>O estoque está ok </span>";
}

?>

<hr>
<!-- ___________________________________________________________________ -->
    <h2 class="destaque">Encadeada</h2>

     <!-- Cardápio digital
    1 -> Pastel
    2 -> Pizza
    3 -> Esfiha
    x -> Opção inválida  -->
<?php
    $opcao = 3; 

    if($opcao === 1) { 
?>
        <p>Pastel</p>
<?php
    } elseif($opcao === 2) {
?>
        <p>Pizza</p>
<?php
    } elseif($opcao === 3) {
?>
        <p>Esfiha</p>
<?php
    } else {
?>
        <p>Opção inválida!</p>
<?php
    } 
/*___________________________________________________________________ */
    // Refatorada (Melhorada)
    $opcao = 1; // comece com qualquer valor


    //  3ª Digitação (Aqui) 
    if($opcao ===1) {
        $opcaoEscolhida = "Pastel";
    } elseif ($opcao ===2) {
        $opcaoEscolhida = "Pizza";
    } elseif ($opcao ===3) {
        $opcaoEscolhida = "Esfiha";
    } else {
        $opcaoEscolhida = "Opção inválida";
    }

?>
    <p><?=$opcaoEscolhida?></p>
<hr>

<!-- ___________________________________________________________________ -->
<h2 class="destaque">Switch/Case</h2>

<!-- 4ª Digitação (Aqui) -->
<?php
   
   
   $opcao = "4";

    switch ($opcao) {
        case 1:  echo "Você pediu uma esfiha."; break;
        case 2:  echo "Você pediu um pastel."; break;
        case 3:  echo "Você pediu uma pizza."; break;
        case 4:  echo "Opção inválida"; break;
    }
    ?>
</body>
</html>