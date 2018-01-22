<?php

//Tekstimuutuja
$tervitus = 'Hello';
# Täisarvuline muutuja
$nr = 1;
// Kümnendmurd
$nr = 10.0121;
// Tõeväärtusmuutuja
$bool = False;
/*
Massiiv (php ja 35 - array, phyton - list)
Üherealine kommentaar on // ja #
*/
$massiiv = array('Laura',1974,4.11,'Koiduste' );

$esta = 'Eesti keel';
$mat = 'Matemaatikaa';
$fyss = 'Füüsika';

$hinded = array('Peeter'=>array($esta=>4, $mat=>4, $fyss=>3),
          'Mari'=>array($esta=>5, $mat=>4, $fyss=>3));

 echo "$tervitus maailm!<br>";
echo "$tervitus maailm!<br>";
// echo $massiiv [0]. '<br>>'

// Tingimuslause
if ($bool == False){
  // massiivi xisu näitamine
  //print_r($massiiv)
  for ($i=0; $i < count ($massiiv); $i++) {
    echo $massiiv [$i]. '<br>';
  }
  // echo $massiiv;
} else { echo "Tõeäärtus ei vasta nõutule";}
$hinded_id = array_keys($hinded);

for ($i = 0; $i < count ($hinded); $i++){
  echo $hinded_id[$i]. '<br>';
foreach ($hinded[$hinded_id[$i]] as $aine => $hinne){
  echo $aine." : ".$hinne. '<br>';
  #code
  }
}



$file = fopen ('counter.txt', "a") or die ("Ei saanud faili avada");
if (!$file){
$txtx =1;
fwrite ($file,$txt);
fclose($file);}
else {
  $txt =fread (file, filesize ('countertxt'));
  $new_txt = $txt + 1;
  fwrite ($file,$fnew_txt);
  fclose($file);
}

$file = fopen('counter.txt', "r") or die("Ei saanuds faili avada");
echo fread ($file, filsize ('counter.txt'))
fclose($file);














 ?>
