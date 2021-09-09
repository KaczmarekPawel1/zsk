<?php
echo "ZSK<br>";
echo "ZSK";
$name="Janusz";
echo "<br>Twoje imie: $name";
$x='x';
$y='y';
//konkatenacja
echo $x.$y;
// typy danych
// boolean - logiczny
$prawda=true;
$fałsz=false;
echo $prawda; //1
echo $fałsz; //nic

// całkowity
$całkowita=10;
$bin =0b1011; //11
$oct=011; //9
$hex=0x11; //17

echo "<hr>$hex";

// zmiennoprzecinkowa

$x = 10.5;

echo gettype($x); double;

// heredoc
$surname="Nowak";
echo <<< E
Imię i Nazwisko:
Janusz $surname <hr>
Poznań
E;
 $text <<< E
 Imię i Nazwisko:
 Janusz $surname <hr>
 Poznań
 E;
echo$text;
?>
