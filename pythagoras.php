<?php
$a=5;
$b=4;
$obdelnikobsah = $a * $b;
echo ('Obsah obdelníku o stranách '. $a. 'cm, ' . $b . 'cm je ' . $obdelnikobsah . 'cm²');
?>
<br>
    <br>
<?php
$strana=6;
$uhel=60;
$vyska=$strana*sin(deg2rad($uhel));
$trojuhelnikobsah=$strana* ($vyska/2);
echo ('Rovnostranný trojúhelník o straně délky ' . $strana . 'cm a úhlu ' . $uhel.' stupňů je '. round ($trojuhelnikobsah).'cm²');
    ?>