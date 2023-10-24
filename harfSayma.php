<?php 

function harfSay($metin,$arananHarf){
  return substr_count($metin,$arananHarf);
  
}
$sonuc =harfSay("aslihan","a");
echo "Tekrarlanan harf sayısı: ".$sonuc;

?>

<hr>
<?php

function countLetters($string,$letter){
    $count=0;

    foreach(str_split($string) as $perLetter){
        if($perLetter==$letter){
            $count++;
        }
    }
    return $count;
}
$result =countLetters("aslihan","a");
echo "Tekrarlanan harf sayısı: ".$result;

?>