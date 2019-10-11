<?php
$a=5;
$b=4;
$obdelnikobsah = $a * $b;
$obdelnikobvod=2*($a+$b);


$strana=6;
$uhel=60;
$vyska=$strana*sin(deg2rad($uhel));
$trojuhelnikobsah=$strana* ($vyska/2);
$trojuhelnikobvod=3*$strana;
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
    <a class="navbar-brand" href="#">Starověká matematika</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pythagoras <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Archimedes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Euklides</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Zde najdeš co hledáš" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledat</button>
        </form>
    </div>
</nav>

<main role="main" class="container-fluid">
    <div class="row">
    <div class="col-md-6">
<h1>Obdelník</h1>
        <table class="table">
            <tbody>
            <tr>
                <th scope="row">Délka strany A</th>
                    <td><?php echo($a);?> cm</td>
                </tr>
                <tr>
                    <th scope="row">Délka strany B</th>
                    <td><?php echo($b);?> cm</td>
                </tr>
                <tr>
                    <th scope="row">Obvod obdelníku</th>
                    <td><?php echo ($obdelnikobvod);?> cm</td>
                </tr>
                <tr>
                    <th scope="row">Obsah obdelníku</th>
                    <td><?php echo $obdelnikobsah;?> cm²</td>
                </tr>
                </thead>
            </table>
                </div>
            <div class="col-md-6">
                <h1>Trojúhelník</h1>
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Délka strany</th>
                        <td><?php echo($strana);?> cm</td>
                    </tr>
                    <tr>
                        <th scope="row">Úhel</th>
                        <td><?php echo($uhel);?> stupňů</td>
                    </tr>
                    <tr>
                        <th scope="row">Výška trojúhelníku</th>
                        <td><?php echo(round ($vyska));?> cm</td>
                    </tr>
                    <tr>
                        <th scope="row">Obvod trojúhelníku</th>
                        <td><?php echo ($trojuhelnikobvod);?> cm</td>
                    </tr>
                    <tr>
                        <th scope="row">Obsah trojúhelníku</th>
                        <td><?php echo round ($trojuhelnikobsah);?> cm²</td>
                    </tr>
                    </thead>
                </table>
            </div>
    </div>
    <main role="main" class="container-fluid">
        <div class="row">
        <div class="col-md-5">
            <h1>Pythagorova věta</h1>
            <p>Pythagorova věta popisuje vztah, který platí mezi délkami stran pravoúhlých trojúhelníků v euklidovské rovině. Umožňuje dopočítat délku třetí strany takového trojúhelníka, pokud jsou známy délky dvou zbývajících stran.
                Věta zní: <b>Obsah čtverce sestrojeného nad přeponou (nejdelší stranou) libovolného pravoúhlého trojúhelníku je roven součtu obsahů čtverců nad oběma jeho odvěsnami (dvěma kratšími stranami).</b></p>
        <img src="Pythagoras6.png" class="rounded mx-auto d-block" alt="Pythagorova věta" width="400">
            <br>
            <br>
            <h1>Pythagoras</h1>
            <p>To jméno je dnes každému známé. Už žáčci na základní škole se s ním setkávají. Panuje obecná představa, že Pythagoras byl velkým <b>antickým matematikem</b> a jeho větu o <b>pravoúhlém trojúhelníku zná každý</b>. On sám by ale proti této představě jistě protestoval, protože se sice matematikou hluboce zabýval, ale považoval se především za <b>filozofa</b>. A fakt, že je znám hlavně díky větě, kterou nevynalezl, by ho určitě překvapil. Asi ne moc příjemně. </size></p>
            <a href="https://vtm.zive.cz/clanky/pythagoras-proslavila-ho-veta-o-trojuhelniku-mel-vsak-uplne-jine-ambice/sc-870-a-190747/default.aspx"><b>Více informací zde</b></a>
            <br>
            <br>
        </div>
            <div class="col-md-7">
    <img src=Pythagoras.jpg class="img-fluid" alt="Pythagoras" width="2000">
            </div>
        </div>
        </div>


        <div class="card-footer text-muted">
            Starověcí matematici
        </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
