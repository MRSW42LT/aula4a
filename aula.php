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

<br><br><br><br>

<?php 
    $a = 2;
    $b = 4;
    echo $a+3*4+5*$b."<br>";       //resultado = 34
    echo ($a + 3)*4+(5*$b); //resultado = 40
?>
