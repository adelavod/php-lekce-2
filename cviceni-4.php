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