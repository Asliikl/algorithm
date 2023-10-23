
<?php 
function hesapla2($sayi3,$sayi4)
{
    $toplam = 0;
    $miktar = 0;

    for($i=$sayi3; $i<=$sayi4; $i++)
    {
        $toplam+=$i;
        $miktar++;
    }
    if($miktar>0)
    {
        $ortalama = $toplam/$miktar;
        return $ortalama;
    }
}

echo hesapla2(1,5);
?>

<!-- faktoriyel -->
<?php 
function hesapla($sayi){
$sonuc=1;
for($i=1; $i<=$sayi; $i++)
{
    $sonuc = $sonuc * $i; 
}
return $sonuc;
}
$sonuc = hesapla(6);
echo $sonuc;
?>
<hr>

<?php
/*
function kdvhesapla($fiyat, $kdv, $kargoucreti, $bedavakargo) {
    $kdvtutar = ($fiyat * $kdv) / 100;
    $kdvlifiyat = $fiyat + $kdvtutar;

    if ($kdvlifiyat < $kargoucreti) {
        $sfiyat = $kdvlifiyat + $kargoucreti;
    } else {
        $sfiyat = $kdvlifiyat;
    }

    if($kdvlifiyat < $bedavakargo){
        $sfiyat=$sfiyat+$kargoucreti;
    }
 
    return $sfiyat;
}
$total = kdvhesapla(120,18,20,100);
echo $total." TL";
*/


// kısa yol
function fiyatHesapla($fiyat, $kdv, $kargoucreti, $bedavakargo) {
    $kdvlifiyat = $fiyat + (($fiyat * $kdv) / 100);
    $sfiyat = $kdvlifiyat < $bedavakargo ? ($kdvlifiyat + $kargoucreti) : $kdvlifiyat;
    return $sfiyat;
}
$total = fiyatHesapla(100,18,20,100);
echo $total." TL";

?>

