<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/mdb.min.css" />
    <link rel="stylesheet" href="css/mdb.min.css" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Portifólio</a>
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Início</a>
            </li>
        </ul>
        <span class="navbar-text">
            Portifólio das aulas de programação web.
        </span>
        </div>
    </div>
    </nav>

    <div style="width: 900px;
  margin: auto;">

    <h1>Hello, world!</h1>


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
        $e = 0;
        //zero sempre é igual a false;
        if ($e == FALSE){
            echo '$e é false';
        }
        //testa se 0 é do tipo false;

        if ($e === FALSE){
            echo '$e é do tipo FALSE';
        }
        if ($e === 0){
            echo '$e é zero';
        }
    ?>

    <br><hr>

    <?php
        $vai_chover = TRUE;
        $esta_frio =  TRUE;

        if ($vai_chover and $esta_frio){
            echo "Não vou sair de casa";
        }
    ?>

    <br><hr>

    <?php
        class Computador {
            var $cpu;
            function ligar(){
                echo "Ligando computador a {$this->cpu}...";
            }
        }
        $obj = new Computador;
        $obj -> cpu = "2.3Ghz";
        $obj -> ligar();
    ?>

    <br><hr>
    
        <div class="row">
            <div class="col">
                <?php
                for ($i=1; $i <= 2; $i++)
                {
                    print "<br>";
                    for ($j = 1; $j <=10; $j++)
                    {
                        $resp = $i * $j;
                        print $i."X".$j."= $resp <br>";
                    }
                }
                ?>
            </div>
            <div class="col">
                <?php
                for ($i=3; $i <= 4; $i++)
                {
                    print "<br>";
                    for ($j = 1; $j <=10; $j++)
                    {
                        $resp = $i * $j;
                        print $i."X".$j."= $resp <br>";
                    }
                }
                ?>
            </div>
            <div class="col">
                <?php
                for ($i=5; $i <= 6; $i++)
                {
                    print "<br>";
                    for ($j = 1; $j <=10; $j++)
                    {
                        $resp = $i * $j;
                        print $i."X".$j."= $resp <br>";
                    }
                }
                ?>
            </div>
            <div class="col">
                <?php
                for ($i=7; $i <= 8; $i++)
                {
                    print "<br>";
                    for ($j = 1; $j <=10; $j++)
                    {
                        $resp = $i * $j;
                        print $i."X".$j."= $resp <br>";
                    }
                }
                ?>
            </div>
            <div class="col">
                <?php
                for ($i=9; $i <= 10; $i++)
                {
                    print "<br>";
                    for ($j = 1; $j <=10; $j++)
                    {
                        $resp = $i * $j;
                        print $i."X".$j."= $resp <br>";
                    }
                }
                ?>
            </div>
        </div>
        
    <br><hr>

    <?php
    $i = 1;
    switch ($i) {
        case 0:
            print "i é igual a 0";
            break;

        case 1:
            print "i é igual a 1";
            break;

        case 2:
            print "i é igual a 2";
            break;
        
        default:
            print "i não é igual a 0, 1 ou 2";
            break;
    }
    ?>
                
    <br><hr>

    <?php
        $fruta = array("maçã", "laranja", "pêra", "banana");
        foreach ($fruta as $valor) {
            print "$valor -";
        }
    ?>

    </div>
  </div>


</body>

</html>
