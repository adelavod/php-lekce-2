<?php
/**
 * Created by PhpStorm.
 * User: AdelaVodvarkova
 * Date: 2019-02-25
 * Time: 16:27
 */
$a = '4';
$b = '5';
$obdelnikobsah = $a * $b
    ?>

<h1>Obsah obdélníku o stranách <?php echo $a ?> cm a <?php echo $b ?> cm je <?php echo $obdelnikobsah ?> cm2.</h1>

<?php
//echo "první způsob:";

$c = 6;
$d = sqrt(3);
$trojuhelnikobsah1 = ($c*$c*$d)/4;
?>

<h1>Obsah rovnoramenného trojúhelníku o stranách <?php echo $c?> cm je <?php echo $trojuhelnikobsah1?> cm.</h1>



<?php
//echo "druhý způsob:";

$strana = 6;
$uhel = 60/180*3.14;
$uhelvrad = deg2rad(60);

$vyska = sin($uhelvrad)*$strana;

$trojuhelnikobsah = ($strana*$vyska)/2;
$roundtrojuhelnikobsah = round($trojuhelnikobsah,2);
echo "Při výpočtu druhým způsobem dojdeme při zaokrouhlení k hodnotě $roundtrojuhelnikobsah .";
?>


