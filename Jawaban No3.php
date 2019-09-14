<form method="post" action="#">  
  Input String    : <input type="text" name="string" value="">
  <br><br>
  Cari Kata/Frasa : <input type="text" name="frasa" value="">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
$kalimat= $_POST["string"];
$frasa=$_POST["frasa"];
$jml_karakter= strlen($kalimat);
$pjg_frasa= strlen($frasa);
if ($pjg_frasa>=$jml_karakter){
      echo "Kata/Frasa Pencarian Terlalu Panjang !";
}else{
for ($i=0; $i<=$jml_karakter; $i++){
      $cari= substr($kalimat, $i, $pjg_frasa);
      if ($cari==$frasa){
            $jml_frasa=$jml_frasa+1;
      }else{
            echo "";
      }
}

for ($j=$jml_karakter; $j>=1; $j--){
      $cari= substr($kalimat, $j-4,$pjg_frasa);
      $hasil = strrev($cari);
      if ($hasil==$frasa){
            $jml_frasa=$jml_frasa+1;
      }else{
            echo "";
      }
}

echo  "$frasa ditemukan $jml_frasa kali";
}


?>