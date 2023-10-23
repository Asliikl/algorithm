<?php 

function polindrom($sayi){
    $sonRakam= implode("",array_reverse(str_split($sayi))) ;
    return  $sayi==$sonRakam ? true :  false;
}
$sonuc = polindrom(101);
 echo $sonuc == true ? 'polindrom sayıdır' : 'polindrom sayı değil';
?>

<hr>İkinci yol: <br>

<?php 
function polindrom2($sayi){
    return strrev($sayi) == $sayi ? true : false;
}
$sonuc = polindrom2(101);
 echo $sonuc ? 'polindrom sayıdır' : 'polindrom sayı değil';
?>