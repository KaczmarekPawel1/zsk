<!DOCTYPE html>
<html lang ="pl" dir="ltr">
<head>
<meta charset="utf-8">
<title>Dane użytkownika</title>
</head>
<body>
<h3>Dane użytkownika</h3>
<from method="get">
<input type="text" name="name" value="Janusz"><br><br>
<input type="submit" value="Zatwierdź">
</from>
<?php
if (!empty($_GET['name'])) && !empty($_GET['surname']))
//echo "Imię: ".$_POST['name']
//echo "Nazwisko: ".$_POST['surname']
echo <<< L
  <hr>
  Imię: $_GET[name]<br>
  Nazwisko: {$_GET['surname']}
L;
}else"Wypełnij dane!";
 ?>
</body>
</html>
