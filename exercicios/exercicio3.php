<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecercicio 3</title>
</head>
<body>
    <!-- Bruno Querino da Silva -->
    <!-- Exemplo números -->
    <!-- numeros inteiro -->
    <h1>Exemplo numeros inteiro</h1>
    <?php 
        echo 6;
        echo "<br>";
        echo 8;
        echo " | Valores inteiros. <br>";
        echo 15 + 9;
        echo " | Soma de inteiros. <br>";
        echo -99;
        echo " | Números negativos. <br>";
        echo 74 - 1;
        echo " | Soma com negativos. <br>";
        
        $n = 8;
        echo $n;
        echo " | Alimentar variável e recuperar valor. <br>";
    ?>
   
    <br><hr>
 
    <h1>Verificação números inteiros</h1>
    <?php

        if(is_int(99)) { 
            echo "É um inteiro <br>";
        }
        if(is_int("9.92")) { 
                echo "É um inteiro 2 <br>";
        }

        $a = 952;

        if(is_int($a)) {
                echo "É um inteiro 3  <br>";
        }
    ?>
    <br><hr>
    <h2>Float ponto flutuante</h2>
   
        <!-- Numeros float -->

   <?php
       
        $a = 2.06;
        echo $a;
        echo "<br>";
   
        echo 4.983;
        echo "<br>";
        
        echo 10.5 + 1.3470;
        echo "<br>";

        echo 5 + 1.3233;
    ?>
    <br><hr>
    <h2>Função de verificação float</h2>
    <p>Para saber se um número ou variável é flutuante usamos a função is_float()</p>

    <!-- Código PHP para verificação de float -->
   
    <?php

        $a = "NaoVai";
        $b = 12.8;

        if(is_float($a)) {
            echo "É float 1! <br>";
        }
        if(is_float($b)) {
            echo "É float 2! <br>";
        }
        if(is_float(1789.63)) {
            echo "É float 3! <br>";
        }
        if(is_float("NaoVai")) {
            echo "É float 4! <br>";
        }
    ?>
    <br><hr>    
    <!-- Texto -->
    <h1>Exemplos de strings</h1>
    <?php 
        echo " 'Estou no curso Sesi Senai!'<br>"; 
        echo " 'Santo André!'<br>";

        $idade = 30;

        echo "Ele tem $idade anos <br>";

    ?>


    <br><hr>



    <!-- Código PHP para verificar strings -->
    <h2>Função de verificação strings</h2>
    <?php
        $str = "SESI";
        $num = 265;

        if(is_string($str)) {
            echo "$str é uma string 1<br>";
        }

        if(is_string($num)) {
            echo "$num é uma string 2<br>";
        }
        if(is_string("asd")) {
            echo "É uma string 3<br>";
        }
        
    ?>
    <hr><br>
    <!-- booleanos -->
    <h1>exemplos de booleano</h1>
    <?php
        echo true;
        echo "<br>";
        echo false;

        if(true) {
            echo "Esta correto";
        }
        if(5 > 2)  { 
            echo "Está correto <br>";
        }

        $podeEntrar = true;

        if($podeEntrar) {
            echo "O usuário está liberado!!";
        }
    ?>
    <br><hr>
    <!--  booleanos -->
    <h2>Função de verificação booleanos</h2>
    <?php 
        $a = true;

        if(is_bool($a)) {
            echo "É um teste 1<br>";
        }

        if(is_bool(0)) {
            echo "É um teste 2<br>";
        }
        if(is_bool(false)) {
            echo "É um teste3<br>";
        }
        if(0.0 == false) {
            echo "0 não é verdadeiro!<br>";
        }
     ?>
    <h1>Tipos de dados array no PHP</h1>
    <p>Um array, é uma lista.</p>
    <hr>
    <p>Veja exemplos:</p>
    
    <!-- Código PHP para arrays -->
    <h1>Exemplo de array</h1>
    <?php
    // echo "<p>Sintaxe NORMAL: Usa o nome e põe os valores entre parenteses.<p>";
        $a = array (1, 2, 3, 4, 5, 20);

        print_r($a);
        echo "<br>";

        echo "<p>O quarto valor da lista é: $a[4]</p>";
    
        $arr = ["SENAI", 118, true];

        echo "<br>";
        print_r($arr);
        echo "<br>";
        print_r($arr[1]);
        echo "<br><p>O primeiro valor da lista é: $arr[0]</p>";
    ?>
</body>
</html>
   
</body>
</html>