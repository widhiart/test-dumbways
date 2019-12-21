<?php

$data = [
    ['a', 'b', 'c', 'd'],
    ['g', 'h', 'i', 'j', 'k'],
    ['d', 'e', 'f']
];

$angka = array(1, 4, 5, 7, 2, 6);

// urutkan data array yang sedikit ke yang lebih banyak
function urutkan_array($hihihi) {
    foreach ($hihihi as $key => $dd) {
        $jumlahArr[count($dd)] = $hihihi[$key];
    }
    sort($jumlahArr);
    $banyakArr = count($jumlahArr);
    
    for($hh = 0; $hh < $banyakArr; $hh++) {
        echo '<pre>';
        print_r($jumlahArr[$hh]);
    }
}

urutkan_array($data);