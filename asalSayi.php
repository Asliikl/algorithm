<?php
function asalMi($sayi){
    for ($i = 2; $i < $sayi; $i++) {
        if ($i < ($sayi/2) + 1 && $sayi % $i == 0) {
            return true;
            break;
        }
    }
    return false;
}
$sonuc = asalMi(7817);
if(!$sonuc){
    echo "asal sayıdır";
}else{
    echo "asal değil";
}

?>