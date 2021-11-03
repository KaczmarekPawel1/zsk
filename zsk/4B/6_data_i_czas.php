<?php
echo "dzień-miesiąc-rok: ".date('d-m-Y').'<br>';
echo "dzień-miesiąc-rok: ".date('m-d-y').'<br>';
echo "dzień-miesiąc-rok: ".date('d-M-Y').'<br>';
echo "dzień-miesiąc-rok: ".date('d-F-Y').'<br>';
setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y'),'<br>';


echo date('G:i:sa'),'<br>';
echo date('H:i:s'),'<br>';


 ?>

 <script>
  setTimeout(function(){
    window.location.reload();
  },1000)
 </script>
 <?php
$date=getdate();
echo "<pre>";
print_r($date);
echo "</pre>";
echo $date['wday'],"<br>";//dzien tygodnia
echo $date['yday'],"<br>";//dzien roku

echo date('L'),"<br>"; //0 rok nie jest przystępny

// mktime()
$today=mktime(0,0,0,date('m'),date('d'),date('Y'));
echo $today,'<br>';

//ile lat minęło od 1 stycznia 1970

$year = $today/(60*60*24*365);
echo (int)$year,'<br>';

$lastyear=mktime(0,0,0,date('m'),date('d'),date('y')-1);
$year = $lastyear/(60*60*24*365).'<br>';
echo (int)$year,'<br>';

  ?>
