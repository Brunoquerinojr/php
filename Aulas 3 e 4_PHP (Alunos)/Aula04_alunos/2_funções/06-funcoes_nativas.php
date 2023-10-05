<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas PHP</title>
</head>
<body>
    <h1>Exemplos de funções nativas do PHP</h1>
    <hr>

    <h2>Strings</h2>
    <h3>String</h3>
<?php
    // Trim(param) -> Remove espaços antes e depois de strings
    $nome = "Ignacio Cunha        ";
    $nomeSemEspaco = trim($nome);
    $jogo = "        Outer Wilds           ";
?>


<pre> <?=var_dump($nome)?> </pre>
<pre> <?=var_dump(trim($nome))?> </pre>
<pre> <?=var_dump($nomeSemEspaco)?> </pre>

<p>Meu teste</p>
<pre> <?=var_dump($jogo)?> </pre>
<pre> <?=var_dump(trim($jogo))?> </pre>

<!-- ___________________________________________________________ -->
<!-- Substitui um texto por outro-->
<h3>str_replace</h3>
<?php
$fraseFeia = "<p>Fulano é um bobão e xarope</p>";
$fraseBonita = str_replace (
    ["bobão", "xarope"],
    ["cara legal", "boa pinta"],
    $fraseFeia
);

echo $fraseFeia;
echo $fraseBonita;
?>
<!-- ___________________________________________________________ -->
<!-- Separa os texto através de um delimitador -->
<h3>explode</h3>
<?php
    $linguagens = "HTML - CSS - JS";
    $arrayLinguagens = explode(" - ", $linguagens);

?>

<pre><?=var_dump($linguagens)?></pre>
<pre><?=var_dump($arrayLinguagens)?></pre>

<?php
    $nomes = "Eduardo Nunes de Lima";
    $arrayNomes = explode(" ", $nomes);

?>

<pre><?=var_dump($nomes)?></pre>
<pre><?=var_dump($arrayNomes)?></pre>

<!-- ___________________________________________________________ -->
<hr>
    <h2>Arrays</h2>
    <h3>implode()</h3>

<?php
    $bandas = ["Savage", "Nightwish", "Ghost"];
    $stringBandas = implode(" | ", $bandas);
?>

<pre> <?=var_dump($bandas)?> </pre>
<pre> <?=var_dump($stringBandas)?> </pre>
<!-- ___________________________________________________________ -->
<!-- Simplifica a saída -->
    <h3>extract()</h3>

<?php
    $aluno = [
        "id" => "Fulano",
        "idade" => 25,
        "sexo" => "masculino",
        "cidade" => "Santo André"
    ];

    extract($aluno)
     
?>


<p> <?=$id?> </p>
<p> <?=$idade?> </p>
<p> <?=$sexo?> </p>
<p> <?=$cidade?> </p>

<hr>

<?php
    $me = [
        "id" => "Eduardo Nunes",
        "idade" => 16,
        "numero" => 221,
        "classe" => "1DE"
    ];

    extract($me)

?>


<p> <?=$id?> </p>
<p> <?=$idade?> </p>
<p> <?=$numero?> </p>
<p> <?=$classe?> </p>

<!-- ___________________________________________________________ -->
<hr>

<!-- Filtra indicando um preenchimento errado -->
    <h2>Filtros</h2>
<?php
    $email = "ignacio@gmail.com.br";
    $ataque = "<script> document.body.innerHTML = '<h1>Sou ráqui!! hahahah >.<</h1>' </script>";

    // echo $ataque;

    $ataqueAnulado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

    echo $ataqueAnulado;
?>


<p>
    <?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))?>
</p>



<!-- ___________________________________________________________ -->
<hr>
    <h2>Segurança (Criptografia)</h2>
