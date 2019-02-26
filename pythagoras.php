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
<h1>Geometrické výpočty</h1>
<h2>Obsah obdélníku o stranách <?php echo $a ?> cm a <?php echo $b ?> cm je <?php echo $obdelnikobsah ?> cm2.</h2>

<?php
//echo "první způsob:";

$c = 6;
$d = sqrt(3);
$trojuhelnikobsah1 = ($c*$c*$d)/4;
?>

<h2>Obsah rovnoramenného trojúhelníku o stranách <?php echo $c?> cm je <?php echo $trojuhelnikobsah1?> cm.</h2>



<?php
//echo "druhý způsob:";

$strana = 6;
$uhel = 60/180*3.14;
$uhelvrad = deg2rad(60);

$vyska = sin($uhelvrad)*$strana;

$trojuhelnikobsah = ($strana*$vyska)/2;
$roundtrojuhelnikobsah = round($trojuhelnikobsah,2);
?>
<h2>Při výpočtu druhým způsobem dojdeme při zaokrouhlení k hodnotě <?php echo $roundtrojuhelnikobsah ?> cm.</h2>

</body>

