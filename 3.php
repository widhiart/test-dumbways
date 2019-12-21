<?php

function prima($kolom, $row){
    $bilangan = $kolom * $row;
    $hasil = "";
    for($i=1; $i<1000 ;$i++){
        $p = 0;

        for($j=1; $j<=$i; $j++){
            if($i % $j == 0){
                $p += 1; 
            }
        }

        if($p <= 2){
            $hasil .= $i.",";
        }
    }

    $pecahHasil = explode(',', $hasil);
    $hitung = 0;
    $kolHitung = 0;
    foreach ($pecahHasil as $pecahku) {
        if ($pecahku != 1) {
            $hitung++; $kolHitung++;
            echo $pecahku.', ';
            // echo $kolHitung;
            if ($kolHitung == $kolom) {
                echo '<br>';
                $kolHitung = 0;
            }

            if ($hitung === $bilangan) {
                exit();
            }
        }
    }
}

print_r(prima(5,5));