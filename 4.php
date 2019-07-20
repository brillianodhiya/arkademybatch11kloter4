<?php
$hargaMakanan = 75000; //harga
$kodeVoucher = "ARKAFOOD5"; //false jika tidak ada
$jarak = 5; 
$pajak = false; //terkadang pajak 5%
if($jarak > 1){
    $minJar = $jarak - 1.5;
    $jumJar = $minJar*3000+5000;
} else {
    $jumJar = $jarak*3000;
}
$biayaTambahan = 1500;
if($kodeVoucher == "ARKAFOOD5") {
    if($hargaMakanan >= 50000) {
        $totalDis = $hargaMakanan * 0.50;
        if($totalDis <= 50000) {
            $hargaDis = $hargaMakanan - $totalDis;
            $disJar = $hargaDis+$jumJar;
            if($pajak == false) {
                echo $disJar+$biayaTambahan;
            } else {
                $paj = $hargaMakanan * 0.05;
                $jumPaj = $disJar + $paj;
                echo $jumPaj+$biayaTambahan;
            }
            
        } else {
            echo "Voucher Tidak Dapat Digunakan";
        }
    }
} elseif($kodeVoucher == "DITRAKTIRDEMY") {
    if($hargaMakanan >= 25000) {
        $totalDis = $hargaMakanan * 0.60;
        if($totalDis <= 30000) {
            $hargaDis = $hargaMakanan - $totalDis;
            $disJar = $hargaDis+$jumJar;
            if($pajak == false) {
                echo $disJar+$biayaTambahan;
            } else {
                $paj = $hargaMakanan * 0.05;
                $jumPaj = $disJar + $paj;
                echo $jumPaj+$biayaTambahan;
            }
        } else {
            echo "Voucher Tidak Dapat Digunakan";
        }
    }
} else {
    if($pajak == false){
        echo $hargaMakanan+$jumJar+$biayaTambahan;
    } else {
        $paj = $hargaMakanan * 0.05;
        $jumPaj = $hargaMakanan+$paj+$biayaTambahan;
        echo $jumPaj;
    }
}
?>