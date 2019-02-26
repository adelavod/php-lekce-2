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
<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ffe4e1">
    <a class="navbar-brand" href="#">php lekce 2</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">domov <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="hledat" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">hledat</button>
        </form>
    </div>
</nav>

<div class="jumbotron">
    <div class="row">
        <div class="col-md-1">
        </div>
    <div class="col-md-7">
<h1 class="display-4">Lekce z geometrie. <br> Pro každého. <br> A zdarma.</h1>
    </div>
        <div class="col-md-4">
        </div>
     </div>
</div>

<?php
//Obdélník
$a = '4';
$b = '5';
$obdelnikobsah = $a * $b
?>

<div class="jumbotron" style="background-color: #ffe4e1">

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>Obdélník.</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Délka strany a</td>
                        <td><?php echo $a?> cm</td>
                    </tr>
                    <tr>
                        <td>Délka strany b</td>
                        <td><?php echo $b ?> cm </td>
                    </tr>
                    <tr>
                        <td>Vzorec pro výpočet</td>
                        <td>S = a * b</td>
                    </tr>
                    <tr>
                        <td>Obsah obdélníku</td>
                        <td><?php echo $obdelnikobsah ?> cm&sup2;</td>
                    </tr>

                    </tbody>
                </table>
                <p><a class="btn btn-outline-secondary" style="color: #000000" href="https://cs.wikipedia.org/wiki/Obd%C3%A9ln%C3%ADk" role="button">Více o obdélnících &raquo; </a></p>
            </div>
<?php
 //echo "druhý způsob:";

$strana = 6;
$uhel = 60;
$uhelvrad = deg2rad(60);

$vyska = sin($uhelvrad)*$strana;
$roundtrojuhelnikvyska = round($vyska,2);

$trojuhelnikobsah = ($strana*$vyska)/2;
$roundtrojuhelnikobsah = round($trojuhelnikobsah,2);
?>

            <div class="col-md-6">
                <h2>Rovnostranný trojúhelník.</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Délka strany a</td>
                        <td><?php echo $strana?> cm</td>
                    </tr>
                    <tr>
                        <td>Velikost vnitřních úhlů</td>
                        <td><?php echo $uhel ?> stupňů </td>
                    </tr>
                    <tr>
                        <td>Výška trojúhelníku</td>
                        <td><?php echo $roundtrojuhelnikvyska?> cm</td>
                    </tr>
                    <tr>
                        <td>Obsah trojúhelníku</td>
                        <td><?php echo $roundtrojuhelnikobsah ?> cm&sup2;</td>
                    </tr>

                    </tbody>
                </table>
                <p><a class="btn btn-outline-secondary" style="color: #000000" href="https://cs.wikipedia.org/wiki/Trojúheln%C3%ADk" role="button">Více o trojúhelnících &raquo;</a></p>
            </div>
        </div>

</div>
</div>


<div class="jumbotron">
    <div class="card-deck">
        <div class="card">
            <img src="http://scienceworld.wolfram.com/biography/pics/Euclid.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Eukleidés (325 - 260 př.n.l.)</h5>
                <p class="card-text">Bod je to, co nemá části. <br>Úsečka je délka bez šířky.<br>Konce úsečky jsou body.</p>
                <a href="https://cs.wikipedia.org/wiki/Eukleid%C3%A9s" class="btn btn-outline-secondary">Více o Euklidovi</a>
            </div>
        </div>
        <div class="card">
            <img src="https://greatestgreeks.files.wordpress.com/2016/03/r52.jpg?w=228&h=278" alt="..." class="card-img-top figure-img">
            <div class="card-body">
                <h5 class="card-title">Thalés z Milétu (624 - 548 př. n. l.)</h5>
                <p class="card-text">Všechny trojúhelníky, jejichž střed kružnice opsané půlí nejdelší stranu, jsou pravoúhlé.</p>
                <a href="https://cs.wikipedia.org/wiki/Thal%C3%A9s_z_Mil%C3%A9tu" class="btn btn-outline-secondary">Více o Thaletovi</a>
            </div>
        </div>
        <div class="card">
            <img src="https://myhero.com/images/guest/g35723/hero32426/g35723_u34867_Pythagoras_10.jpeg" class="card-img-top " alt="...">
            <div class="card-body">
                <h5 class="card-title">Pythagoras (570 - 510 př. n. l.)</h5>
                <p class="card-text">Součet obsahů čtverců nad oběma odvěsnami pravoúhlého trojúhelníka je roven obsahu čtverce nad přeponou. </p>
                <a href="https://cs.wikipedia.org/wiki/Pythagoras" class="btn btn-outline-secondary">Více o Pythagorovi</a>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">Vyrobeno v únoru.</a>
    </div>
</nav>

    <hr>

</div> <!-- /container -->

</body>

