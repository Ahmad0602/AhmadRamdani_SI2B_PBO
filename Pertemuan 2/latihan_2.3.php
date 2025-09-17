<?php
$x = 5;
$y = 10;
 
var_dump($x != $y); // apakah $x tidak sama dengan $y?
echo "<br>";
 
$x = 10;
$y = 10;
 
var_dump($x === $y); // apakah $x identik dengan $y? (nilai & tipe data harus sama)
echo "<br>";
 
$x = 16;
$y = 10;
 
var_dump($x >= $y); // apakah $x lebih besar atau sama dengan $y?
echo "<br>";
 
$x = 6;
$y = 6;
 
var_dump($x === $y); // apakah $x identik dengan $y? (nilai & tipe data harus sama)
echo "<br>";
 
$x = 15;
$y = 10;
 
echo ($x <=> $y); // spaceship operator (bandingkan $x dan $y)
?>