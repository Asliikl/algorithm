<?php

$sayi;
function amstrongSayi($sayi){
    $rakamArray = str_split($sayi);
    $toplamKup = 0;
    
    foreach($rakamArray as $item)
    {
        $kupAl=$item*$item*$item;
        $toplamKup+=$kupAl;
    }
   return $toplamKup;
}

$sayi = 12;
$sonuc = amstrongSayi($sayi);

echo $sonuc == $sayi ? "bu sayı amstrongdur" : "bu sayı amstrong değil";

?>
<hr>İkinci Yol : <br>

<?php
function amstrongSayi2($sayi){
    $toplamKup = 0;
    foreach(str_split($sayi) as $item){
        $toplamKup+=pow($item,3);
    }
   return $toplamKup==$sayi;
}
$sonuc = amstrongSayi2(12);
echo $sonuc ? "bu sayı amstrongdur" : "bu sayı amstrong değil";
?>

