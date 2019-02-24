<?php
/**
 * Created by PhpStorm.
 * User: AdelaVodvarkova
 * Date: 2019-02-21
 * Time: 20:07
 */
$castkaBezDph = 149.99;
$dph = 21;
$castkaSdph = $castkaBezDph * (1 + $dph / 100);

echo $castkaSdph;
echo "<br>";

var_dump($castkaBezDph);
echo "<br>";
var_dump($castkaSdph);
echo "<br>";
var_dump($dph);

