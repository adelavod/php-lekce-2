<?php
$titulek = 'Uživatelský profil';
$pole = ['jméno' => 'Adéla', 'příjmení' => 'Vodvářková'];
$pole = ['věk' => '24'];

$jmeno = "Adéla";
$poradi = 5;

$cislo = 10;
$negcislo = -2;
$descislo = 0.1;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="starter-template">
        <h2>
            <?php

            echo $titulek;

            ?>
        </h2>
<?php
// array (pole) je seznam prvků. prvky pole se zapisují do [...]
?>

        <table class="table table-striped table-dark table-hover">
            <tbody>
            <tr>
                <th>Jméno:</th>
                <td> <?php
                    $profil = ['jmeno'=> 'Adéla', 'prijmeni'=> 'Vodvářková'];

                    echo $profil['jmeno'];
                    ?> </td>
            </tr>
            <tr>
                <th>Příjmení:</th>
                <td> <?php
                    echo $profil['prijmeni'];
                ?> </td>
            </tr>
            <tr>
                <th>Věk:</th>
                <td>
                <?php
                $profil['vek']='24';
                echo $profil['vek'];
                ?> </td>
            </tr>
            <tr>
                <th>Oblíbená barva:</th>
                <td>
                <?php
                $profil['barva']=['nazev'=>'žlutá', 'kod'=> '#ffd700'];
                echo $profil['barva']['nazev'];
                ?> </td>
            </tr>
            <tr>
                <th>Koníčky:</th>
                <td> <?php
                $profil['konicky']=['PHP','PS4', 'PRÁVO','fighting patriarchy'];
                $profil['konicky'][]='memes';
                print_r($profil['konicky']);

                ?> </td>
            </tr>
            </tbody>
        </table>
        <p class="lead">text.<br>text.</p>
    </div>

<?php
$promenna = true;
var_dump($promenna);

echo "<br>";

$promenna1 = 'hello ';
$promenna2 = "world";
var_dump($promenna1 . $promenna2 . '!');

echo "<br>";

echo 'jméno: ' . $jmeno . ', pořadí: ' . $poradi;
echo "<br>";
var_dump ('jméno: ' . $jmeno . ', pořadí: ' . $poradi);
echo "<br>";
$soucet1 = $cislo + $negcislo;
echo "součet 10 + (- 2) je = $soucet1" ;
echo "<br>";
$soucet2 = $cislo + $descislo;
echo "součet 10 + 0.1 je = $soucet2";
echo "<br>";
$nasobekvseho = $cislo * $descislo * $negcislo;
echo "násobek všeho je $nasobekvseho";
echo "<br>";
var_dump($soucet1);
echo "<br>";
var_dump($soucet2);
echo "<br>";
var_dump($nasobekvseho);
echo "<br>";
var_dump($negcislo);
?>
    <br>
<h2>Výpočet DPH.</h2>
<?php
$castkabezDPH = 2000;
$DPH = 21;
$castkasDPH = $castkabezDPH + ($castkabezDPH/100)*21;
echo "<br>";
echo "Částka $castkabezDPH s DPH je $castkasDPH";
echo "What is happening" ;
echo "<br>";


?>

<hr>

</main><!-- /.container -->

<footer class="container-fluid">
        <p>Vyrobeno v únoru </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
