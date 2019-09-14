
<?php
    function cetak($a){
        $karakter = "abcdefghijklmnopqrstuvwxyz0123456789";
        for ($i=1; $i<=$a;$i++){
            for ($j=1;$j<=32;$j++){
                $acak = rand(0,35);
                $string = $karakter{$acak};
                echo $string;
            }
            echo "<br>";
        }
    } 
    echo cetak(3);
    
?>