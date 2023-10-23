<?php 

function hipotenusBul($kenar1,$kenar2){
  return $hipotenusHesapla = sqrt(pow($kenar1,2)+pow($kenar2,2)) ;
  
}
$hipotenus=hipotenusBul(2,4);
echo "Hipotenüsü: ".$hipotenus;

/* hypot fonksiyonu ile : 
function hipotenusBul($kenar1,$kenar2){
   return hypot($kenar1,$kenar2);
}
$hipotenus=hipotenusBul(2,4);
echo "Hipotenüsü: ".$hipotenus;
*/

?>