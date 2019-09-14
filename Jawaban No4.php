<?php
function cetak_gambar($tinggi){
if ($tinggi %2 == 0){
    echo "Parameter Harus Ganjil !";
}else{
echo "<center>";
echo "--- panjang ---";
echo "<br>";
for ($i=1;$i<=$tinggi;$i++){
    for ($j=1; $j<=$tinggi;$j++){
        if ($j==1){
            echo "*";
            echo "&nbsp&nbsp";
        }else if($i %3 == 0){
            echo "*";
            echo "&nbsp&nbsp";
        }else if($j==$tinggi){
            echo "*";
            echo "&nbsp&nbsp";
        }else{
            echo "=";
            echo "&nbsp&nbsp";
        }
    }
    echo "<br>";
}
}
}

echo cetak_gambar(5);

?>