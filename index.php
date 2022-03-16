<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/mdb.min.css" />
</head>

<body>
    <div style="width: 500px;
  margin: auto;">

<h1>Hello, world!</h1>

<?php
echo 'A', 'B', 'C';
?>

<br><hr>

<?php 
    print 'PRINT';
?>

<br><hr>

<?php 
    $vetor = array('Um', 'Dois');
    var_dump($vetor);
?>

<br><hr>

<?php 
    $vetor = array('Um', 'Dois');
    print_r($vetor);
?>

<br><hr>

<?php 
    $nome = "João";
    $sobrenome = "Da Silva";
    echo "$nome, $sobrenome";
?>

<br><hr>

<?php 
    $a = 2;
    $b = 4;
    echo $a+3*4+5*$b."<br>";        //resultado = 34
    echo ($a + 3)*4+(5*$b);         //resultado = 40
?>

<br><hr>

<?php
    $a = '10';
    echo $a + 5;    //resultado = 15
?>

<br><hr>

<?php
    $a = 123;
    $b = '123';

    if($a == $b){
        echo '$a e $b são iguais';
    } elseif ($a != $b) {
        echo '$a e $b são diferentes';
    }
?>

<br><hr>

<?php
    $a = 123;
    $b = '123';

    if($a === $b){
        echo '$a e $b são iguais';
    } elseif ($a !== $b) {
        echo '$a e $b são diferentes';
    }
?>

<br><hr>

<?php
    $e = 0
    //zero sempre é igual a false;
    if ($e == FALSE){
        echo '$e é false';
    }//testa se 0 é do tipo false;

    if ($e === FALSE){
        echo '$e é do tipo FALSE';
    }
    if ($e === 0){
        echo '$e é zero';
    }
?>

  </div>


</body>

</html>